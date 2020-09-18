<!-- Alice M. Romero Reyes
    Pagina de Profile del director
    en esta el director/a verá todas las solicitudes que deben ser aprobas por el/ella-->

<?php 
session_start();
include 'functions.php';
include 'sconn.php';
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="over.css">
    <title>Administrador</title>
</head>
<!-- El nav se utiliza en todas las pantallas con el logo -->
<body>
    <nav class="navbar navbar-expand-sm bg-light ">
    	   <a class="navbar-brand" href="index.php">
      <img src="images/logo.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
      </a> 
        <span class="navbar-text">
        Bienvenido/a <?php echo $_SESSION['Fname'];?>
        </span>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
                      
          <li class="nav-item">
            <a class="nav-link" href="#">Acreditación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reportes.php">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="crearadmin.php">Registrar Administrador</a>
          </li><a><form action= "logout.php" method ="post"><button type="submit" name="logout" class="btn btn-primary btn-sm">Salir</button></form></a> 
         </ul>  
  </nav>
  <!-- Aquí empieza el código-->
  <!-- Todas las solicitudes están divididas por tablas para que sea más cómodo a la vista del aprobador/a-->
  <div class = "container">
  <?php 
  /*Aquí se mostraran todas las actividades que deben ser aprobadas por el director de actividades extracurricuales*/
  $sql = "SELECT * FROM actividades
    	    INNER JOIN asociaciones ON actividades.associationID = asociaciones.associationID
          WHERE statusSol = 'pendiente';";
  $result = $conn->query($sql);
  $i = 1;
  while($row = mysqli_fetch_assoc($result)){
    $asociacion[$i] = $row['asocName'];
    $nombreact[$i] = $row['actName'];
    $descact[$i] = $row['actDes'];
    $propact[$i] = $row['actProp'];
    $actdate[$i] = $row['actDate'];
    $actIni[$i] = $row['horarioInicial'];
    $actFin[$i] = $row['horarioFin'];
    $actPlace[$i] = $row['actPlace'];
    $fecha[$i] = $row['submitDate'];
    $actdate[$i] = date('D-d-M-Y', strtotime($actdate[$i]));
    $actIni[$i] = date('h:i a', strtotime($actIni[$i]));
    $actFin[$i]= date('h:i a', strtotime($actFin[$i]));
    $i++;
  }
  //Solicitud de actividades para aprobar, esta se buscan en la tabla de actividades, donde el estaus de solicitud sea pendiente.
  if($result->num_rows > 0){
    echo "<h3>Solicitudes de actividad en espera de aprobación.</h3>";
    tableActividades();
    for($i=1; $i <=count($asociacion); $i++)
    {
      echo "<tr>
            <td>$asociacion[$i]</td>
            <td>$nombreact[$i]</td>
            <td>$descact[$i]</td>
            <td>$propact[$i]</td>
            <td>$actdate[$i]</td>
            <td>$actIni[$i]</td>
            <td>$actFin[$i]</td>
            <td>$actPlace[$i]</td>
            <td>$fecha[$i]</td>";
            echo '<td><form action="aprobar.php" method = "POST">
            <div class = "form-check">
            <label class = "form-check-label">
            <input type = "checkbox" class = "form-check-input" name = "aprobar" value = ""  > Aprobar
            </label

            </div></td>
            
            </tr>';    
    }
    echo "</tbody>
          </table>";
   echo '<button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button></form>';
    
  }
  ?>
  <!--Solicitud de salones para aprobar, se busca en la tabla de salones donde el estaus de solicitud sea pendiente-->
  <?php 
  $sql = "SELECT * FROM salones
  INNER JOIN asociaciones ON salones.associationID = asociaciones.associationID
  WHERE estatus = 'pendiente';";
   $result = $conn->query($sql);
   $i = 1;
   while($row = mysqli_fetch_assoc($result)){
     $asociacion[$i] = $row['asocName'];
     $salon[$i] = $row['salon'];
     $proposito[$i] = $row['proposito'];
     $fechaAct[$i] = $row['fecha'];
     $horaInicio[$i] = $row['horaInicio'];
     $horaFin[$i] = $row['horaFinal'];
     $fecha[$i] = $row['fecha'];
     //Formato de la hora y fecha
     $fechaAct[$i] = date('D-d-M-Y', strtotime($fechaAct[$i]));
     $horaInicio[$i] = date('h:i a', strtotime($horaInicio[$i]));
     $horaFin[$i]= date('h:i a', strtotime($horaFin[$i]));
     
     $i++;
   }
     if($result->num_rows > 0){
      echo "<h3>Solicitudes de salón en espera de aprobación.</h3>";
      tableSalones();
      for($i=1; $i <=count($salon); $i++)
      {
        echo "<tr>
              <td>$asociacion[$i]</td>
              <td>$salon[$i]</td>
              <td>$proposito[$i]</td>
              <td>$fechaAct[$i]</td>
              <td>$horaInicio[$i]</td>
              <td>$horaFin[$i]</td>
              <td>$fecha[$i]</td>";
              echo '<td><form action="aprobar.php"> <div class = "form-check">
            <label class = "form-check-label">
            <input type = "checkbox" class = "form-check-input" value = "" > Aprobar
            </label>
            </div></td>
            </form>
          </div>
              </tr>'; 
      }
      //echo '<button type="submit" class="btn btn-primary">Submit</button>';
      echo "</tbody>
            </table>";
            
    }
  ?>

<!--Solicitud de vestíbulo, se busca en la tabla de la solicitud de vestíbulo donde el estaus de solicitud sea pendiente-->
  <?php 
  $sql = "SELECT * FROM actividadesvestibulo
  INNER JOIN asociaciones ON actividadesvestibulo.associationID = asociaciones.associationID
  WHERE statusSol = 'pendiente';";
   $result = $conn->query($sql);
   $i = 1;
   while($row = mysqli_fetch_assoc($result)){
     $asociacion[$i] = $row['asocName'];
     $nombre[$i] = $row['nombreSol'];
     $proposito[$i] = $row['propAct'];
     $fechaAct[$i] = $row['actDate'];
     $horaInicio[$i] = $row['actIni'];
     $horaFin[$i] = $row['actFin'];
     $fecha[$i] = $row['fecha'];
     //Formato de la hora y fecha
     $fechaAct[$i] = date('D-d-M-Y', strtotime($fechaAct[$i]));
     $horaInicio[$i] = date('h:i a', strtotime($horaInicio[$i]));
     $horaFin[$i]= date('h:i a', strtotime($horaFin[$i]));
     $i++;
   }
     if($result->num_rows > 0){
      echo "<h3>Solicitudes de vestíbulo en espera de aprobación.</h3>";
      tableVestibulo();
      for($i=1; $i <=count($nombre); $i++)
      {
        echo "<tr>
              <td>$asociacion[$i]</td>
              <td>$nombre[$i]</td>
              <td>$proposito[$i]</td>
              <td>$fechaAct[$i]</td>
              <td>$horaInicio[$i]</td>
              <td>$horaFin[$i]</td>
              <td>$fecha[$i]</td>";
              echo '<td><div class = "form-check">
            <label class = "form-check-label">
            <input type = "checkbox" class = "form-check-input" value = "" > Aprobar
            </label>
            </div></td>
              </tr>';
      }
      echo "</tbody>
            </table>";
    }
  ?>

  <?php 
    /*Aquí se mostraran todas las actividades que deben ser aprobadas por el director de actividades extracurricuales*/
    $sql = "SELECT * FROM solicitudesservicio
            INNER JOIN asociaciones ON solicitudesservicio.associationID = asociaciones.associationID
            WHERE statusSol = 'pendiente';";
    $result = $conn->query($sql);
    $i = 1;
    while($row = mysqli_fetch_assoc($result)){
      $asociacion[$i] = $row['asocName'];
      $nombreSol[$i] = $row['nombreSol'];
      $servicioDes[$i] = $row['servicioDes'];
      $actDate[$i] = $row['actDate'];
      $actIni[$i] = $row['actIni'];
      $actFin[$i] = $row['actFin'];
      $actPlace[$i] = $row['actPlace'];
      $fecha[$i] = $row['fecha'];
      //Formato de la hora y fecha
      $actdate[$i] = date('D-d-M-Y', strtotime($actdate[$i]));
      $actIni[$i] = date('h:i a', strtotime($actIni[$i]));
      $actFin[$i]= date('h:i a', strtotime($actFin[$i]));
      $i++;
    }
    //Mostrar la información de la solicitud de servicios para que se pueda aprobar
    if($result->num_rows > 0){
      echo "<h3>Solicitudes de servicio en espera de aprobación.</h3>";
      tableServicios();
      for($i=1; $i <=count($nombreSol); $i++)
      {
        echo "<tr>
              <td>$asociacion[$i]</td>
              <td>$nombreSol[$i]</td>
              <td>$servicioDes[$i]</td>
              <td>$actDate[$i]</td>
              <td>$actIni[$i]</td>
              <td>$actFin[$i]</td>
              <td>$actPlace[$i]</td>
              <td>$fecha[$i]</td>";
              echo '<td><form action="aprobar.php" method = "POST">
              <div class = "form-check">
              <label class = "form-check-label">
              <input type = "checkbox" class = "form-check-input" name = "aprobar" value = ""  > Aprobar
              </label
  
              </div></td>
              
              </tr>';    
      }
      echo "</tbody>
            </table>";
     echo '<button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button></form>';
      
    }
    ?>

<?php 
    /*Aquí se mostraran todas las actividades que deben ser aprobadas por el director de actividades extracurricuales*/
    $sql = "SELECT * FROM auditorio
            INNER JOIN asociaciones ON auditorio.associationID = asociaciones.associationID
            WHERE statusSol = 'pendiente';";
    $result = $conn->query($sql);
    $i = 1;
    while($row = mysqli_fetch_assoc($result)){
      $asociacion[$i] = $row['asocName'];
      $nombreSol[$i] = $row['nombre'];
      $email[$i] = $row['email'];
      $proposito[$i] = $row['proposito'];  
      $actIni[$i] = $row['horaIni'];
      $actFin[$i] = $row['horaFin'];
      $cantidad[$i] = $row['cantidad'];
      $departamento[$i] = $row['departamento'];
      $fechaUso[$i] = $row['fechaUso'];
      $fecha[$i] = $row['fecha'];
      //Formato de la hora y fecha
      $fechaUso[$i] = date('D-d-M-Y', strtotime($fechaUso[$i]));
      $actIni[$i] = date('h:i a', strtotime($actIni[$i]));
      $actFin[$i]= date('h:i a', strtotime($actFin[$i]));
      $i++;
    }
    //Mostrar la información de la solicitud de servicios para que se pueda aprobar
    if($result->num_rows > 0){
      echo "<h3>Solicitudes de Auditorio 225 en espera de aprobación.</h3>";
      tableAuditorio();
      for($i=1; $i <=count($nombreSol); $i++)
      {
        echo "<tr>
              <td>$asociacion[$i]</td>
              <td>$nombreSol[$i]</td>
              <td>$email[$i]</td>
              <td>$proposito[$i]</td>
              <td>$actIni[$i]</td>
              <td>$actFin[$i]</td>
              <td>$cantidad[$i]</td>
              <td>$departamento[$i]</td>
              <td>$fechaUso[$i]</td>
              <td>$actPlace[$i]</td>
              <td>$fecha[$i]</td>";
              echo '<td><form action="aprobar.php" method = "POST">
              <div class = "form-check">
              <label class = "form-check-label">
              <input type = "checkbox" class = "form-check-input" name = "aprobar" value = ""  > Aprobar
              </label
  
              </div></td>
              
              </tr>';    
      }
      echo "</tbody>
            </table>";
     echo '<button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button></form>';
      
    }
    ?>
  <?php 
  $sql = "SELECT * FROM conferencia
  INNER JOIN asociaciones ON conferencia.associationID = asociaciones.associationID
  WHERE statusSol = 'pendiente';";
  $result = $conn->query($sql);
  $i = 1;
  while($row = mysqli_fetch_assoc($result)){
    $asociacion[$i] = $row['asocName'];
    $nombreSol[$i] = $row['nombre'];
    $email[$i] = $row['email'];
    $fechaUso[$i] = $row['fechaUso'];
    $actIni[$i] = $row['horaIni'];
    $actFin[$i] = $row['horaFin'];
    $telefono[$i] = $row['telefono'];
    $proposito[$i] = $row['proposito'];
    $otroProp[$i] = $row['otroProp'];
    $uso[$i] = $row['uso'];
    $estatus[$i] = $row['statusSol'];
    $fecha[$i] = $row['fecha'];
    //Formato de la hora y fecha
    $fechaUso[$i] = date('D-d-M-Y', strtotime($fechaUso[$i]));
    $actIni[$i] = date('h:i a', strtotime($actIni[$i]));
    $actFin[$i]= date('h:i a', strtotime($actFin[$i]));
    $i++;
  }
  //Mostrar la información de la solicitud de servicios para que se pueda aprobar
  if($result->num_rows > 0){
    echo "<h3>Solicitudes de sala de conferencias en espera de aprobación.</h3>";
    tableSalaConferencia();
    for($i=1; $i <=count($nombreSol); $i++)
    {
      echo "<tr>
            <td>$asociacion[$i]</td>
            <td>$nombreSol[$i]</td>
            <td>$email[$i]</td>
            <td>$fechaUso[$i]</td>
            <td>$actIni[$i]</td>
            <td>$actFin[$i]</td>
            <td>$telefono[$i]</td>
            <td>$proposito[$i]</td>
            <td>$otroProp[$i]</td>
            <td>$uso[$i]</td>
            <td>$fecha[$i]</td>";
            echo '<td><form action="aprobar.php" method = "POST">
            <div class = "form-check">
            <label class = "form-check-label">
            <input type = "checkbox" class = "form-check-input" name = "aprobar" value = ""  > Aprobar
            </label

            </div></td>
            
            </tr>';    
    }
    echo "</tbody>
          </table>";
   echo '<button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button></form>';
    
  }
  
  
  ?>
<?php 
  $sql = "SELECT * FROM plantas
  INNER JOIN asociaciones ON plantas.associationID = asociaciones.associationID
  WHERE estatus = 'pendiente';";
  $result = $conn->query($sql);
  $i = 1;
  while($row = mysqli_fetch_assoc($result)){
    $asociacion[$i] = $row['asocName'];
    $nombreSol[$i] = $row['nombre'];
    $fecha[$i] = $row['fecha'];
    $proposito[$i] = $row['proposito'];
    $cantidad[$i] = $row['cantidad'];
    $fechaUso[$i] = $row['dateUso'];
    $lugar[$i] = $row['lugar'];
    $actIni[$i] = $row['hourIni'];
    $actFin[$i] = $row['hourFIn'];
    $fecha[$i] = $row['fecha'];
    $estatus[$i] = $row['estatus'];
    //Formato de la hora y fecha
    $fechaUso[$i] = date('D-d-M-Y', strtotime($fechaUso[$i]));
    $actIni[$i] = date('h:i a', strtotime($actIni[$i]));
    $actFin[$i]= date('h:i a', strtotime($actFin[$i]));
    $i++;
  }
  //Mostrar la información de la solicitud de plantas para que se pueda aprobar
  if($result->num_rows > 0){
    echo "<h3>Solicitudes de Plantas en espera de aprobación.</h3>";
    tablePlantas();
    for($i=1; $i <=count($nombreSol); $i++)
    {
      echo "<tr>
            <td>$asociacion[$i]</td>
            <td>$nombreSol[$i]</td>
            <td>$fechaUso[$i]</td>
            <td>$proposito[$i]</td>
            <td>$cantidad[$i]</td>
            <td>$actIni[$i]</td>
            <td>$actFin[$i]</td>
            <td>$fecha[$i]</td>
            <td>$estatus[$i]</td>";
            echo '<td><form action="aprobar.php" method = "POST">
            <div class = "form-check">
            <label class = "form-check-label">
            <input type = "checkbox" class = "form-check-input" name = "aprobar" value = ""  > Aprobar
            </label

            </div></td>
            
            </tr>';    
    }
    echo "</tbody>
          </table>";
   echo '<button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button></form>';
    
  }?>

<?php 
 $sql = "SELECT * FROM actividadesteatro
 INNER JOIN asociaciones ON actividadesteatro.associationID = asociaciones.associationID
 WHERE statusSol = 'pendiente';";
 $result = $conn->query($sql);
 $i = 1;
 while($row = mysqli_fetch_assoc($result)){
   $asociacion[$i] = $row['asocName'];
   $nombreSol[$i] = $row['nombreSol'];
   $numTel[$i] = $row ['numTel'];
   $emailSol[$i] = $row['emailSol'];
   $audioVi[$i] = $row['audioVi'];
   $actProp[$i] = $row['actProp'];
   $actDate[$i] = $row['actDate'];
   $actIni[$i] = $row['actIni'];
   $actFin[$i] = $row['actFin'];
   $cantPer[$i] = $row['cantPer'];
   $estatus[$i] = $row['statusSol'];
   $fecha[$i] = $row['fecha'];
   //Formato de la hora y fecha
   $actDate[$i] = date('D-d-M-Y', strtotime($actDate[$i]));
   $actIni[$i] = date('h:i a', strtotime($actIni[$i]));
   $actFin[$i]= date('h:i a', strtotime($actFin[$i]));
   $i++;
 }
 //Mostrar la información de la solicitud de plantas para que se pueda aprobar
 if($result->num_rows > 0){
   echo "<h3>Solicitudes de Plantas en espera de aprobación.</h3>";
   tableTeatro();
   for($i=1; $i <=count($numTel); $i++)
   {
     echo "<tr>
           <td>$asociacion[$i]</td>
           <td>$nombreSol[$i]</td>
           <td>$numTel[$i]</td>
           <td>$emailSol[$i]</td>
           <td>$audioVi[$i]</td>
           <td>$actProp[$i]</td>
           <td>$actDate[$i]</td>
           <td>$actIni[$i]</td>
           <td>$actFin[$i]</td>
           <td>$cantPer[$i]</td>
           <td>$fecha[$i]</td>";
           echo '<td><form action="aprobar.php" method = "POST">
           <div class = "form-check">
           <label class = "form-check-label">
           <input type = "checkbox" class = "form-check-input" name = "aprobar" value = ""  > Aprobar
           </label

           </div></td>
           
           </tr>';    
   }
   echo "</tbody>
         </table>";
  echo '<button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button></form>';
  
 }

?>
  </div>
 <br><br><br>

  <footer class="footer"> 
      <p>&copy Actividades Extracurriculares UPRP, <?php echo date("Y");?> &copy </p>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>