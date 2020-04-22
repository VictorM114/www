<?php 
session_start();
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
        <span class="navbar-text">
         Bienvenido/a <?php echo $_SESSION['Fname'];?>
        </span>
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Solicitudes
            </a>
            <!-- Dropdown -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="solicitudes/solicitud-general.php">Solicitud</a>
              <a class="dropdown-item" href="#">Préstamo de Salón</a>
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
         <a><button action ="logout.php" type="button" class="btn btn-primary btn-sm">Salir</button></a> 
  </nav>
          <div class = "container">
          <h2>Solicitudes General</h2>
          <p>La asociación tiene número de solicitudes pendientes</p>
          </div>
          <div class = "container">
          <h2>Solicitudes Aprobadas</h2>
          <p>Las siguientes solicitudes han sido aprobadas.</p>
          
          </div>
          <div class="container">
            <h2>Actividades Próximas</h2>
              <?php 
                    /*Selecciona todo de actividades, une asociaciones donde el association ID de 
                    ambas tablas sea igual y me muestras todo donde el nombre de la asociacion sea igual que 
                    el nombre completo del usuario (que es el mismo) */
                    $sql = "SELECT * FROM actividades
                            INNER JOIN asociaciones ON actividades.associationID = asociaciones.associationID
                            WHERE asocName ='".$_SESSION['Fname']."'AND statusSol = 'aprobado';";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      #output de las actividades en una tabla
                      echo " <p>Estas son las actividades próximas de"; 
                      echo " " . $_SESSION['Fname'] . ".</p>";            
                      echo '<small>*Las actividades mostradas son de las próximas dos semanas*</small>
                      <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            <th>Actividad</th>
                            <th>Lugar</th>
                            <th>Descripcion</th>
                            <th>Propósito</th>
                            <th>Fecha</th>
                            <th>Horario Comienzo</th>
                            <th>Horario de Cierre</th>
                            <th>Status de Solicitud</th>
                          </tr>
                        </thead>
                        <tbody>';
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
                        echo "<td>" . $row['actDes'] . "</td>";
                        echo "<td>" . $row['actProp'] . "</td>";
                        echo "<td>" . $htmldate . "</td>";
                        echo "<td>" . $htmltime1 . "</td>";
                        echo "<td>" . $htmltime2 . "</td>";
                        echo "<td>" . $row['statusSol'] . "</td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<h2>" . $_SESSION['Fname'] . " no tiene actividades programadas. </h2>";
                    }
                ?>
              </tbody>
            </table>
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