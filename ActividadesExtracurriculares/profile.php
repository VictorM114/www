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
            <!-- Dropdown -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="solicitudes/solicitud-general.php">Solicitud</a>
              <a class="dropdown-item" href="solicitudes/solicitud-salon.php">Préstamo de Salón</a>
              <a class="dropdown-item" href="#">Solicitud del Auditorio 225</a>
              <a class="dropdown-item" href="#">Teatro General</a>
              <a class="dropdown-item" href="#">Solicitud de Servicios</a>
              <a class="dropdown-item" href="#">Solicitud de Plantas</a>
              <a class="dropdown-item" href="#">Solicitud de Préstamo de Equipo</a>
              <a class="dropdown-item" href="#">Solicitud de Vestíbulo</a>
              <a class="dropdown-item" href="#">Sala de Conferencias del D.E.</a>
              <a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSc0DxMjDzRctM5T3T_sDlKFg55HwqU1VcLIB7HpU-LwHBLDUg/viewform"
              target="_blank">Solicitud Instalaciones de la Biblioteca</a>
              <a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSf_i6Gkc6-WIBYzzkSUb6oVEDQyK6-noJla60MQYHFKRlMvSw/viewform"
              target="_blank">Solicitud de Fotografia y Sonido</a>
              <a class="dropdown-item" href="">Solicitud de Transportación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acreditación</a>
          </li>
         </ul>
         <a><form action= "logout.php" method ="post"><button type="submit" name="logout" class="btn btn-primary btn-sm">Salir</button></form></a> 
  </nav> 
    <br>
          <div id ="accordion">
          <div class = "container">

          <?php
                   /*Selecciona todo de actividades, une asociaciones donde el association ID de 
                    ambas tablas sea igual y me muestras todo donde el nombre de la asociacion sea igual que 
                    el nombre completo del usuario (que es el mismo) */
                    $sql = "SELECT * FROM actividades
                            INNER JOIN asociaciones ON actividades.associationID = asociaciones.associationID
                            WHERE asocName ='".$_SESSION['Fname']."'AND statusSol = 'pendiente';";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                      #output de las actividades en una tabla        
                      echo '<div class ="card">
                      <div class ="card-header">
                      <a class="card-link" data-toggle="collapse" href="#collapseOne">
                        <h2>Solicitudes Generales Pendientes</h2></a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class ="card-body">
                      <h4>Las siguentes solicitudes están pendientes para aprobar.</h4>';
                      tableHeader();
                      while($row = $result->fetch_assoc()){
                        #Cambio de formato en las fechas SQL a fechas mas legibles
                        $sqldate = $row['actDate'];
                        $htmldate = date('D-d-M-Y',strtotime($sqldate));
                        $sqltime1 = $row['horarioInicial'];
                        $htmltime1 = date('h:i a', strtotime($sqltime1));
                        $sqltime2 = $row['horarioFin'];
                        $htmltime2 = date('h:i a', strtotime($sqltime2));
                        echo "<tr>";
                        echo "<td>" . $row['actName'] . "</td>";
                        echo "<td>" . $row['actPlace'] . "</td>";
                        echo "<td>" . $htmldate . "</td>";
                        echo "<td>" . $htmltime1 . "</td>";
                        echo "<td>" . $htmltime2 . "</td>";
                        echo "</tr>";
                        echo "</tbody>
                              </table>
                              </div>
                              </div>";
                      }
                    } ?>

                    <?php 
                    $sql2 = "SELECT * FROM actividades
                    INNER JOIN asociaciones ON actividades.associationID = asociaciones.associationID
                    WHERE asocName ='".$_SESSION['Fname']."'AND statusSol = 'aprobada';";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                     #output de las actividades en una tabla        
                      echo '<div class ="card">
                            <div class ="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                            <h2>Solicitudes Generales Aprobadas</h2></a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class ="card-body">
                      <h4>Las siguientes solicitudes han sido aprobadas.</h4>';
                      tableHeader();
                      while($row2 = $result2->fetch_assoc()){
                        #Cambio de formato en las fechas SQL a fechas mas legibles
                        $dbdate = $row2['actDate'];
                        $beudate = date('D-d-M-Y',strtotime($dbdate));
                        $time1 = $row2['horarioInicial'];
                        $time1 = date('h:i a', strtotime($time1));
                        $time2 = $row2['horarioFin'];
                        $time2 = date('h:i a', strtotime($time2));
                        echo "<tr>";
                        echo "<td>" . $row2['actName'] . "</td>";
                        echo "<td>" . $row2['actPlace'] . "</td>";
                        echo "<td>" . $beudate . "</td>";
                        echo "<td>" . $time1 . "</td>";
                        echo "<td>" . $time2 . "</td>";
                        #echo "<td>" . $row2['statusSol'] . "</td>";
                        echo "</tr>";
                        echo "</tbody>
                              </table>
                              </div>
                              </div>";
                      }
                    } 
                    ?>


                  </div>
                  </div>
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