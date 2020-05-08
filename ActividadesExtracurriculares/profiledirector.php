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
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Solicitudes Pendientes
            </a>
            <!-- Dropdown -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="solicitudes/solicitud-general.php">Solicitud</a>
              <a class="dropdown-item" href="#">Préstamo de Salón</a>
              <a class="dropdown-item" href="#">Solicitud del Auditorio 225</a>
              <a class="dropdown-item" href="#">Teatro General</a>
              <a class="dropdown-item" href="#">Solicitud de Servicios</a>
              <a class="dropdown-item" href="solicitudes/solicitud-plantas.php">Solicitud de Plantas</a>
              <a class="dropdown-item" href="#">Solicitud de Préstamo de Equipo</a>
              <a class="dropdown-item" href="#">Solicitud de Vestíbulo</a>
              <a class="dropdown-item" href="#">Sala de Conferencias</a>
              <a class="dropdown-item" href="">Solicitud de Transportación</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acreditación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reportes</a>
          </li>
         </ul>
         <a><form action= "logout.php" method ="post"><button type="submit" name="logout" class="btn btn-primary btn-sm">Salir</button></form></a> 
  </nav>
  <!-- Aquí empieza el código-->
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
    /*$actdate[$i] = date('D-d-M-Y', strtotime($actdate[$i]));
    $actIni[$i] = date('h:i a', strtotime($actIni[$i]));
    $actFin[$i]= date('h:i a', strtotime($actFin));
    */
    $i++;
  }
  
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
            <td>$actPlace[$i]</td>";
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
     $funcionario[$i] = $row['funcionario'];

     /*$actdate[$i] = date('D-d-M-Y', strtotime($actdate[$i]));
     $actIni[$i] = date('h:i a', strtotime($actIni[$i]));
     $actFin[$i]= date('h:i a', strtotime($actFin));
     */
     $i++;

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
              <td>$funcionario[$i]</td>"; 
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
   }
  ?>

  <?php 
  $sql = "SELECT * FROM actividadesvestibulo
  INNER JOIN asociaciones ON actividadesvestibulo.associationID = asociaciones.associationID
  WHERE statusSol = 'pendiente';";
   $result = $conn->query($sql);
   $i = 1;
   while($row = mysqli_fetch_assoc($result)){
     $asociacion[$i] = $row['asocName'];
     $nombre[$i] = $row['nombreSol'];
     $tipo[$i] = $row['tipoSol'];
     $proposito[$i] = $row['propAct'];
     $fechaAct[$i] = $row['actDate'];
     $horaInicio[$i] = $row['actIni'];
     $horaFin[$i] = $row['actFin'];
     
     /*$actdate[$i] = date('D-d-M-Y', strtotime($actdate[$i]));
     $actIni[$i] = date('h:i a', strtotime($actIni[$i]));
     $actFin[$i]= date('h:i a', strtotime($actFin));
     */
     $i++;

     if($result->num_rows > 0){
      echo "<h3>Solicitudes de salón en espera de aprobación.</h3>";
      tableVestibulo();
      for($i=1; $i <=count($tipo); $i++)
      {
        echo "<tr>
              <td>$asociacion[$i]</td>
              <td>$nombre[$i]</td>
              <td>$tipo[$i]</td>
              <td>$proposito[$i]</td>
              <td>$fechaAct[$i]</td>
              <td>$horaInicio[$i]</td>
              <td>$horaFin[$i]</td>";
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