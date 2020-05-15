<?php 
session_start();
include 'functions.php';
include 'sconn.php';
?>
<!doctype html><!--Boostrap Siempre Requiere doctype-->
<html lang="en" lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="over.css" rel="stylesheet" >
    <title>Profile</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm bg-light ">
    	<a class="navbar-brand" href="index.php">
      <img src="images/logo.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
      </a> 
        <span class="navbar-text"><b>
         Bienvenido/a <?php echo $_SESSION['Fname'];?>
        </b></span>
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Solicitudes
            </a>
            <!-- Dropdown con todas las solicitudes -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="solicitudes/solicitud-general.php">Solicitud</a>
              <a class="dropdown-item" href="solicitudes/solicitud-salon.php">Préstamo de Salón</a>
              <a class="dropdown-item" href="solicitudes/solicitud-auditorio.php">Solicitud del Auditorio 225</a>
              <a class="dropdown-item" href="solicitudes/solicitud-teatro.php">Teatro General</a>
              <a class="dropdown-item" href="solicitudes/solicitud-servicios.php">Solicitud de Servicios</a>
              <a class="dropdown-item" href="solicitudes/solicitud-plantas.php">Solicitud de Plantas</a>
              <a class="dropdown-item" href="solicitudes/solicitud-prestamoequipo.php">Solicitud de Préstamo de Equipo</a>
              <a class="dropdown-item" href="solicitudes/solicitud-vestibulo.php">Solicitud de Vestíbulo</a>
              <a class="dropdown-item" href="solicitudes/solicitud-conferencias.php">Sala de Conferencias del D.E.</a>
              <!--Estas solicitudes son las solicitudes que son externas a la plataforma
              estan en google forms y se tienen que escribir el target blank para que 
              abran en otro tab-->
              <a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSc0DxMjDzRctM5T3T_sDlKFg55HwqU1VcLIB7HpU-LwHBLDUg/viewform"
              target="_blank">Solicitud Instalaciones de la Biblioteca</a>
              <a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSf_i6Gkc6-WIBYzzkSUb6oVEDQyK6-noJla60MQYHFKRlMvSw/viewform"
              target="_blank">Solicitud de Fotografia y Sonido</a>
              <a class="dropdown-item" href="#">Solicitud de Transportación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acreditacion.php">Acreditación</a>
          </li>
         </ul>
         <a><form action= "logout.php" method ="post"><button type="submit" name="logout" class="btn btn-primary btn-sm">Salir</button></form></a> 
  </nav> 
    <br>
  
          <div class = "container">
            <div class = "jumbotron">
          <h2>Solicitudes Pendientes y/o Aprobadas</h2>
          </div>
          <?php
                   /*Selecciona todo de actividades (que es la solicitud general), une asociaciones donde el association ID de 
                    ambas tablas sea igual y me muestras todo donde el nombre de la asociacion sea igual que 
                    el nombre completo del usuario (que es el mismo) */
                    $sql = "SELECT * FROM actividades
                            INNER JOIN asociaciones ON actividades.associationID = asociaciones.associationID
                            WHERE asocName ='".$_SESSION['Fname']."'AND statusSol = 'pendiente';";
                    $result = $conn->query($sql);
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)){
                      $nombre[$i] = $row['actName'];
                      $fecha[$i] = $row['actDate'];
                      $lugar[$i] = $row['actPlace'];
                      $incio[$i] = $row['horarioInicial'];
                      $final[$i] = $row['horarioFin'];
                      $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                      $incio[$i] = date('h:i a', strtotime($incio[$i]));
                      $final[$i] = date('h:i a', strtotime($final[$i]));
                      $i++;
                    }
                    if($result->num_rows > 0){
                      echo "<h3>Solicitud Principal</h3>";
                    echo "<h4>Estas son las solicitudes pendiendes a aprobar.</h4>";
                    tableheader();
                    for($i=1; $i <=count($nombre); $i++)
                    {
                      echo "<tr>
                            <td>$nombre[$i]</td>
                            <td>$lugar[$i]</td>
                            <td>$fecha[$i]</td>
                            <td>$incio[$i]</td>
                            <td>$final[$i]</td>
                             </tr>";  
                    }
                    echo "</tbody>
                          </table>";
                        }

                     ?>
              <?php
                   /*Selecciona todo de actividades (que es la solicitud general), une asociaciones donde el association ID de 
                    ambas tablas sea igual y me muestras todo donde el nombre de la asociacion sea igual que 
                    el nombre completo del usuario (que es el mismo) */
                    $sql = "SELECT * FROM actividades
                            INNER JOIN asociaciones ON actividades.associationID = asociaciones.associationID
                            WHERE asocName ='".$_SESSION['Fname']."'AND statusSol = 'aprobada';";
                    $result = $conn->query($sql);
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)){
                      $nombre[$i] = $row['actName'];
                      $fecha[$i] = $row['actDate'];
                      $lugar[$i] = $row['actPlace'];
                      $incio[$i] = $row['horarioInicial'];
                      $final[$i] = $row['horarioFin'];
                      $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                      $incio[$i] = date('h:i a', strtotime($incio[$i]));
                      $final[$i] = date('h:i a', strtotime($final[$i]));
                      $i++;

                    }
                    if($result->num_rows > 0){
                      echo "<h3>Solicitud Principal</h3>";
                    echo "<h4>Estas son las solicitudes que han sido aprobadas.</h4>";
                    tableheader();
                    for($i=1; $i <=count($nombre); $i++)
                    {
                      echo "<tr>
                            <td>$nombre[$i]</td>
                            <td>$lugar[$i]</td>
                            <td>$fecha[$i]</td>
                            <td>$incio[$i]</td>
                            <td>$final[$i]</td>
                             </tr>";  
                    }
                    echo "</tbody>
                          </table>";
                        }

                     ?>
                     <?php 
                          $sql = "SELECT * FROM salones
                          INNER JOIN asociaciones ON salones.associationID = asociaciones.associationID
                          WHERE asocName ='".$_SESSION['Fname']."'AND estatus = 'pendiente';";
                           $result = $conn->query($sql);
                           $i = 1;
                           while($row = mysqli_fetch_assoc($result)){
                             $proposito[$i] = $row['proposito'];
                             $fecha[$i] = $row['fechaAct'];
                             $salon[$i] = $row['salon'];
                             $incio[$i] = $row['horaInicio'];
                             $final[$i] = $row['horaFinal'];
                             $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                             $incio[$i] = date('h:i a', strtotime($incio[$i]));
                             $final[$i] = date('h:i a', strtotime($final[$i]));
                             $i++;
       
                           }
                           if($result->num_rows > 0){
                             echo "<h3>Solicitud Prestamo de Salón</h3>";
                             echo "<h4>Estas son las solicitudes pendientes para aprobar.</h4>";
                             echo '<table class="table table-bordered">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th>Propósito</th>
                                        <th>Fecha</th>
                                        <th>Salón</th>
                                        <th>Horario Comienzo</th>
                                        <th>Horario de Culmunación</th>
                                      </tr>
                                    </thead>
                                    <tbody>';
                             for($i=1; $i<=count($proposito); $i++){
                              echo "<tr>
                                    <td>$proposito[$i]</td>
                                    <td>$fecha[$i]</td>
                                    <td>$salon[$i]</td>
                                    <td>$incio[$i]</td>
                                    <td>$final[$i]</td>
                                    </tr>";  
                             }
                             echo "</tbody>
                                  </table>"; 
                           }
                     ?>
                    <?php 
                          $sql = "SELECT * FROM salones
                          INNER JOIN asociaciones ON salones.associationID = asociaciones.associationID
                          WHERE asocName ='".$_SESSION['Fname']."'AND estatus = 'aprobada';";
                           $result = $conn->query($sql);
                           $i = 1;
                           while($row = mysqli_fetch_assoc($result)){
                             $proposito[$i] = $row['proposito'];
                             $fecha[$i] = $row['fechaAct'];
                             $salon[$i] = $row['salon'];
                             $incio[$i] = $row['horaInicio'];
                             $final[$i] = $row['horaFinal'];
                             $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                             $incio[$i] = date('h:i a', strtotime($incio[$i]));
                             $final[$i] = date('h:i a', strtotime($final[$i]));
                             $i++;
       
                           }
                           if($result->num_rows > 0){
                             echo "<h3>Solicitud Prestamo de Salón</h3>";
                             echo "<h4>Estas son las solicitudes de préstamo de salón aprobdas.</h4>";
                             echo '<table class="table table-bordered">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th>Propósito</th>
                                        <th>Fecha</th>
                                        <th>Salón</th>
                                        <th>Horario Comienzo</th>
                                        <th>Horario de Culmunación</th>
                                      </tr>
                                    </thead>
                                    <tbody>';
                             for($i=1; $i<=count($proposito); $i++){
                              echo "<tr>
                                    <td>$proposito[$i]</td>
                                    <td>$fecha[$i]</td>
                                    <td>$salon[$i]</td>
                                    <td>$incio[$i]</td>
                                    <td>$final[$i]</td>
                                    </tr>";  
                             }
                             echo "</tbody>
                                  </table>"; 
                           }
                     ?>
                     <?php 
                        $sql = "SELECT * FROM solicitudesservicio
                        INNER JOIN asociaciones ON solicitudesservicio.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'pendiente';";
                         $result = $conn->query($sql);
                         $i = 1;
                         while($row = mysqli_fetch_assoc($result)){
                           $servicio[$i] = $row['servicioDes'];
                           $fecha[$i] = $row['actDate'];
                           $lugar[$i] = $row['actPlace'];
                           $incio[$i] = $row['actIni'];
                           $final[$i] = $row['actFin'];
                           $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                           $incio[$i] = date('h:i a', strtotime($incio[$i]));
                           $final[$i] = date('h:i a', strtotime($final[$i]));
                           $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud de Servicios</h3>";
                            echo "<h4>Estas son las solicitudes de servicios pendientes.</h4>";
                            echo '<table class="table table-bordered">
                                   <thead class="thead-dark">
                                     <tr>
                                       <th>Servicio</th>
                                       <th>Fecha</th>
                                       <th>Lugar</th>
                                       <th>Horario Comienzo</th>
                                       <th>Horario de Culmunación</th>
                                     </tr>
                                   </thead>
                                   <tbody>';
                            for($i=1; $i<=count($servicio); $i++){
                             echo "<tr>
                                   <td>$servicio[$i]</td>
                                   <td>$fecha[$i]</td>
                                   <td>$lugar[$i]</td>
                                   <td>$incio[$i]</td>
                                   <td>$final[$i]</td>
                                   </tr>";  
                            }
                            echo "</tbody>
                                 </table>";                             
                          }
                     ?>
                    <?php 
                        $sql = "SELECT * FROM solicitudesservicio
                        INNER JOIN asociaciones ON solicitudesservicio.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'aprobada';";
                         $result = $conn->query($sql);
                         $i = 1;
                         while($row = mysqli_fetch_assoc($result)){
                           $servicio[$i] = $row['servicioDes'];
                           $fecha[$i] = $row['actDate'];
                           $lugar[$i] = $row['actPlace'];
                           $incio[$i] = $row['actIni'];
                           $final[$i] = $row['actFin'];
                           $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                           $incio[$i] = date('h:i a', strtotime($incio[$i]));
                           $final[$i] = date('h:i a', strtotime($final[$i]));
                           $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud de Servicios</h3>";
                            echo "<h4>Estas son las solicitudes de servicios aprobadas.</h4>";
                            echo '<table class="table table-bordered">
                                   <thead class="thead-dark">
                                     <tr>
                                       <th>Servicio</th>
                                       <th>Fecha</th>
                                       <th>Lugar</th>
                                       <th>Horario Comienzo</th>
                                       <th>Horario de Culmunación</th>
                                     </tr>
                                   </thead>
                                   <tbody>';
                            for($i=1; $i<=count($servicio); $i++){
                             echo "<tr>
                                   <td>$servicio[$i]</td>
                                   <td>$fecha[$i]</td>
                                   <td>$lugar[$i]</td>
                                   <td>$incio[$i]</td>
                                   <td>$final[$i]</td>
                                   </tr>";  
                            }
                            echo "</tbody>
                                 </table>";                             
                          }
                     ?>
                     <?php 
                     $sql = "SELECT * FROM actividadesteatro
                     INNER JOIN asociaciones ON actividadesteatro.associationID = asociaciones.associationID
                     WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'pendiente';";
                     $result = $conn->query($sql);
                     $i = 1;
                     while($row = mysqli_fetch_assoc($result)){
                       $proposito[$i] = $row['actProp'];
                       $fecha[$i] = $row['actDate'];
                       $cantidadPer[$i] = $row['cantPer'];
                       $incio[$i] = $row['actIni'];
                       $final[$i] = $row['actFin'];
                       $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                       $incio[$i] = date('h:i a', strtotime($incio[$i]));
                       $final[$i] = date('h:i a', strtotime($final[$i]));
                       $i++; }
                      if($result->num_rows > 0){
                        echo "<h3>Solicitud del Teatro General</h3>";
                        echo "<h4>Estas son las solicitudes del Teatro pendientes.</h4>";
                        echo '<table class="table table-bordered">
                               <thead class="thead-dark">
                                 <tr>
                                   <th>Proposito</th>
                                   <th>Fecha</th>
                                   <th>Cantidad de Personas</th>
                                   <th>Horario Comienzo</th>
                                   <th>Horario de Culmunación</th>
                                 </tr>
                               </thead>
                               <tbody>';
                        for($i=1; $i<=count($cantidadPer); $i++){
                         echo "<tr>
                               <td>$proposito[$i]</td>
                               <td>$fecha[$i]</td>
                               <td>$cantidadPer[$i]</td>
                               <td>$incio[$i]</td>
                               <td>$final[$i]</td>
                               </tr>";  
                        }
                        echo "</tbody>
                             </table>"; }
                     ?>
                     <?php 
                     $sql = "SELECT * FROM actividadesteatro
                     INNER JOIN asociaciones ON actividadesteatro.associationID = asociaciones.associationID
                     WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'aprobada';";
                     $result = $conn->query($sql);
                     $i = 1;
                     while($row = mysqli_fetch_assoc($result)){
                       $proposito[$i] = $row['actProp'];
                       $fecha[$i] = $row['actDate'];
                       $cantidadPer[$i] = $row['cantPer'];
                       $incio[$i] = $row['actIni'];
                       $final[$i] = $row['actFin'];
                       $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                       $incio[$i] = date('h:i a', strtotime($incio[$i]));
                       $final[$i] = date('h:i a', strtotime($final[$i]));
                       $i++; }
                      if($result->num_rows > 0){
                        echo "<h3>Solicitud del Teatro General</h3>";
                        echo "<h4>Estas son las solicitudes del Teatro aprobada.</h4>";
                        echo '<table class="table table-bordered">
                               <thead class="thead-dark">
                                 <tr>
                                   <th>Proposito</th>
                                   <th>Fecha</th>
                                   <th>Cantidad de Personas</th>
                                   <th>Horario Comienzo</th>
                                   <th>Horario de Culmunación</th>
                                 </tr>
                               </thead>
                               <tbody>';
                        for($i=1; $i<=count($proposito); $i++){
                         echo '<tr>
                               <td>$proposito[$i]</td>
                               <td>$fecha[$i]</td>
                               <td>$cantidadPer[$i]</td>
                               <td>$incio[$i]</td>
                               <td>$final[$i]</td>
                               </tr>';  
                        }
                        echo "</tbody>
                             </table>"; }
                     ?>
                     <?php 
                        $sql = "SELECT * FROM actividadesvestibulo
                        INNER JOIN asociaciones ON actividadesvestibulo.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'pendiente';";
                        $result = $conn->query($sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                          $proposito[$i] = $row['propAct'];
                          $fecha[$i] = $row['actDate'];
                          $incio[$i] = $row['actIni'];
                          $final[$i] = $row['actFin'];
                          $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                          $incio[$i] = date('h:i a', strtotime($incio[$i]));
                          $final[$i] = date('h:i a', strtotime($final[$i]));
                          $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud del Vestibulo</h3>";
                            echo "<h4>Estas son las solicitudes del Vestibulo pendientes.</h4>";
                            echo '<table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>Proposito</th>
                                      <th>Fecha</th>
                                      <th>Horario Comienzo</th>
                                      <th>Horario de Culmunación</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
                            for($i=1; $i<=count($proposito); $i++){
                            echo "<tr>
                                  <td>$proposito[$i]</td>
                                  <td>$fecha[$i]</td>
                                  <td>$incio[$i]</td>
                                  <td>$final[$i]</td>
                                  </tr>";  
                            }
                            echo "</tbody>
                                </table>"; 
                          }                    
                     ?>
                   <?php 
                        $sql = "SELECT * FROM actividadesvestibulo
                        INNER JOIN asociaciones ON actividadesvestibulo.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'aprobada';";
                        $result = $conn->query($sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                          $proposito[$i] = $row['propAct'];
                          $fecha[$i] = $row['actDate'];
                          $incio[$i] = $row['actIni'];
                          $final[$i] = $row['actFin'];
                          $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                          $incio[$i] = date('h:i a', strtotime($incio[$i]));
                          $final[$i] = date('h:i a', strtotime($final[$i]));
                          $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud del Vestibulo</h3>";
                            echo "<h4>Estas son las solicitudes del Vestibulo aprobadas.</h4>";
                            echo '<table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>Proposito</th>
                                      <th>Fecha</th>
                                      <th>Horario Comienzo</th>
                                      <th>Horario de Culmunación</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
                            for($i=1; $i<=count($proposito); $i++){
                            echo "<tr>
                                  <td>$proposito[$i]</td>
                                  <td>$fecha[$i]</td>
                                  <td>$incio[$i]</td>
                                  <td>$final[$i]</td>
                                  </tr>";  
                            }
                            echo "</tbody>
                                </table>"; }                    
                     ?>
                     <?php 
                        $sql = "SELECT * FROM auditorio
                        INNER JOIN asociaciones ON auditorio.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'pendiente';";
                        $result = $conn->query($sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                          $proposito[$i] = $row['proposito'];
                          $fecha[$i] = $row['fechaUso'];
                          $incio[$i] = $row['horaIni'];
                          $final[$i] = $row['horaFin'];
                          $cantidadPer[$i] = $row['cantidad'];
                          $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                          $incio[$i] = date('h:i a', strtotime($incio[$i]));
                          $final[$i] = date('h:i a', strtotime($final[$i]));
                          $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud del auditorio 225</h3>";
                            echo "<h4>Estas son las solicitudes del Auditorio 225 pendientes.</h4>";
                            echo '<table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>Proposito</th>
                                      <th>Fecha</th>
                                      <th>Cantidad de Personas</th>
                                      <th>Horario Comienzo</th>
                                      <th>Horario de Culmunación</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
                            for($i=1; $i<=count($proposito); $i++){
                            echo "<tr>
                                  <td>$proposito[$i]</td>
                                  <td>$fecha[$i]</td>
                                  <td>$cantidadPer[$i]</td>
                                  <td>$incio[$i]</td>
                                  <td>$final[$i]</td>
                                  </tr>";  
                            }
                            echo "</tbody>
                                </table>"; 
                          }                    
                     ?>
                     <?php 
                        $sql = "SELECT * FROM auditorio
                        INNER JOIN asociaciones ON auditorio.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'aprobada';";
                        $result = $conn->query($sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                          $proposito[$i] = $row['proposito'];
                          $fecha[$i] = $row['fechaUso'];
                          $incio[$i] = $row['horaIni'];
                          $final[$i] = $row['horaFin'];
                          $cantidadPer[$i] = $row['cantidad'];
                          $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                          $incio[$i] = date('h:i a', strtotime($incio[$i]));
                          $final[$i] = date('h:i a', strtotime($final[$i]));
                          $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud del auditorio 225</h3>";
                            echo "<h4>Estas son las solicitudes del Auditorio 225 aprobadas.</h4>";
                            echo '<table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>Proposito</th>
                                      <th>Fecha</th>
                                      <th>Cantidad de Personas</th>
                                      <th>Horario Comienzo</th>
                                      <th>Horario de Culmunación</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
                            for($i=1; $i<=count($proposito); $i++){
                            echo "<tr>
                                  <td>$proposito[$i]</td>
                                  <td>$fecha[$i]</td>
                                  <td>$cantidadPer[$i]</td>
                                  <td>$incio[$i]</td>
                                  <td>$final[$i]</td>
                                  </tr>";  
                            }
                            echo "</tbody>
                                </table>"; 
                          }                    
                     ?>
                     <?php 
                        $sql = "SELECT * FROM conferencia
                        INNER JOIN asociaciones ON conferencia.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'pendiente';";
                        $result = $conn->query($sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                          $proposito[$i] = $row['proposito'];
                          $fecha[$i] = $row['fechaUso'];
                          $incio[$i] = $row['horaIni'];
                          $final[$i] = $row['horaFin'];
                          $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                          $incio[$i] = date('h:i a', strtotime($incio[$i]));
                          $final[$i] = date('h:i a', strtotime($final[$i]));
                          $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud de la sala de conferencias</h3>";
                            echo "<h4>Estas son las solicitudes de la sala de conferencias pendientes.</h4>";
                            echo '<table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>Proposito</th>
                                      <th>Fecha</th>
                                      <th>Horario Comienzo</th>
                                      <th>Horario de Culmunación</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
                            for($i=1; $i<=count($proposito); $i++){
                            echo "<tr>
                                  <td>$proposito[$i]</td>
                                  <td>$fecha[$i]</td>
                                  <td>$incio[$i]</td>
                                  <td>$final[$i]</td>
                                  </tr>";  
                            }
                            echo "</tbody>
                                </table>"; 
                          }                    
                     ?>   
                     <?php 
                        $sql = "SELECT * FROM conferencia
                        INNER JOIN asociaciones ON conferencia.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'aprobada';";
                        $result = $conn->query($sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                          $proposito[$i] = $row['proposito'];
                          $fecha[$i] = $row['fechaUso'];
                          $incio[$i] = $row['horaIni'];
                          $final[$i] = $row['horaFin'];
                          $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                          $incio[$i] = date('h:i a', strtotime($incio[$i]));
                          $final[$i] = date('h:i a', strtotime($final[$i]));
                          $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud de la sala de conferencias</h3>";
                            echo "<h4>Estas son las solicitudes de la sala de conferencias aprobadas.</h4>";
                            echo '<table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>Proposito</th>
                                      <th>Fecha</th>
                                      <th>Horario Comienzo</th>
                                      <th>Horario de Culmunación</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
                            for($i=1; $i<=count($proposito); $i++){
                            echo "<tr>
                                  <td>$proposito[$i]</td>
                                  <td>$fecha[$i]</td>
                                  <td>$incio[$i]</td>
                                  <td>$final[$i]</td>
                                  </tr>";  
                            }
                            echo "</tbody>
                                </table>"; 
                          }                    
                     ?>
                     <?php 
                        $sql = "SELECT * FROM plantas
                        INNER JOIN asociaciones ON plantas.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND estatus = 'pendiente';";
                        $result = $conn->query($sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                          $proposito[$i] = $row['proposito'];
                          $fecha[$i] = $row['dateUso'];
                          $incio[$i] = $row['hourIni'];
                          $final[$i] = $row['hourFIn'];
                          $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                          $incio[$i] = date('h:i a', strtotime($incio[$i]));
                          $final[$i] = date('h:i a', strtotime($final[$i]));
                          $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud de plantas</h3>";
                            echo "<h4>Estas son las solicitudes de plantas pendientes.</h4>";
                            echo '<table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>Proposito</th>
                                      <th>Fecha</th>
                                      <th>Horario Comienzo</th>
                                      <th>Horario de Culmunación</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
                            for($i=1; $i<=count($proposito); $i++){
                            echo "<tr>
                                  <td>$proposito[$i]</td>
                                  <td>$fecha[$i]</td>
                                  <td>$incio[$i]</td>
                                  <td>$final[$i]</td>
                                  </tr>";  
                            }
                            echo "</tbody>
                                </table>"; 
                          }                    
                     ?> 
                     <?php 
                        $sql = "SELECT * FROM plantas
                        INNER JOIN asociaciones ON plantas.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND estatus = 'aprobada';";
                        $result = $conn->query($sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                          $proposito[$i] = $row['proposito'];
                          $fecha[$i] = $row['dateUso'];
                          $incio[$i] = $row['hourIni'];
                          $final[$i] = $row['hourFIn'];
                          $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                          $incio[$i] = date('h:i a', strtotime($incio[$i]));
                          $final[$i] = date('h:i a', strtotime($final[$i]));
                          $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud de plantas</h3>";
                            echo "<h4>Estas son las solicitudes de plantas aprobadas.</h4>";
                            echo '<table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>Proposito</th>
                                      <th>Fecha</th>
                                      <th>Horario Comienzo</th>
                                      <th>Horario de Culmunación</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
                            for($i=1; $i<=count($proposito); $i++){
                            echo "<tr>
                                  <td>$proposito[$i]</td>
                                  <td>$fecha[$i]</td>
                                  <td>$incio[$i]</td>
                                  <td>$final[$i]</td>
                                  </tr>";  
                            }
                            echo "</tbody>
                                </table>"; 
                          }                    
                     ?>
                     <?php 
                        $sql = "SELECT * FROM prestamoequipo
                        INNER JOIN asociaciones ON prestamoequipo.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'pendiente';";
                        $result = $conn->query($sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                          $nombre[$i] = $row['actName'];
                          $proposito[$i] = $row['propAct'];
                          $fecha[$i] = $row['actDate'];
                          $incio[$i] = $row['actIni'];
                          $final[$i] = $row['actFin'];
                          $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                          $incio[$i] = date('h:i a', strtotime($incio[$i]));
                          $final[$i] = date('h:i a', strtotime($final[$i]));
                          $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud Prestamo de Equipo</h3>";
                            echo "<h4>Estas son las solicitudes de prestamo de equipo pendientes.</h4>";
                            echo '<table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>Actividad</th>
                                      <th>Proposito</th>
                                      <th>Fecha</th>
                                      <th>Horario Comienzo</th>
                                      <th>Horario de Culmunación</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
                            for($i=1; $i<=count($proposito); $i++){
                            echo "<tr>
                                  <td>$nombre[$i]</td>
                                  <td>$proposito[$i]</td>
                                  <td>$fecha[$i]</td>
                                  <td>$incio[$i]</td>
                                  <td>$final[$i]</td>
                                  </tr>";  
                            }
                            echo "</tbody>
                                </table>
                                <br><br>"; 
                          }                    
                     ?>
                      <?php 
                        $sql = "SELECT * FROM prestamoequipo
                        INNER JOIN asociaciones ON prestamoequipo.associationID = asociaciones.associationID
                        WHERE asocName ='".$_SESSION['Fname']."' AND statusSol = 'aprobada';";
                        $result = $conn->query($sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                          $nombre[$i] = $row['actName'];
                          $proposito[$i] = $row['propAct'];
                          $fecha[$i] = $row['actDate'];
                          $incio[$i] = $row['actIni'];
                          $final[$i] = $row['actFin'];
                          $fecha[$i] = date('D-d-M-Y', strtotime($fecha[$i]));
                          $incio[$i] = date('h:i a', strtotime($incio[$i]));
                          $final[$i] = date('h:i a', strtotime($final[$i]));
                          $i++; }
                          if($result->num_rows > 0){
                            echo "<h3>Solicitud Prestamo de Equipo</h3>";
                            echo "<h4>Estas son las solicitudes de prestamo de equipo aprobadas.</h4>";
                            echo '<table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>Actividad</th>
                                      <th>Proposito</th>
                                      <th>Fecha</th>
                                      <th>Horario Comienzo</th>
                                      <th>Horario de Culmunación</th>
                                    </tr>
                                  </thead>
                                  <tbody>';
                            for($i=1; $i<=count($proposito); $i++){
                            echo "<tr>
                                  <td>$nombre[$i]</td>
                                  <td>$proposito[$i]</td>
                                  <td>$fecha[$i]</td>
                                  <td>$incio[$i]</td>
                                  <td>$final[$i]</td>
                                  </tr>";  
                            }
                            echo "</tbody>
                                </table>
                                <br><br>"; 
                          }                    
                     ?>                          
    <!-- Footer, alineado en el centro-->
    <!--Cambie el tag div por footer-->
    <footer class="footer"> 
      <p>&copy Actividades Extracurriculares UPRP, <?php echo date("Y");?> &copy </p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>