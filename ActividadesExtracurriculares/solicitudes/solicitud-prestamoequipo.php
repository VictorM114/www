<?php 
/*Víctor M. Ayala Hernández 
  En esta pantalla los usuarios podrán someter la solicitud 
  de prestamo de equipo que se utiliza para solicitar un proyector y 
  una pizarra en la Oficina de Actividades Extracurriculares*/
session_start();
include '../sconn.php';
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
    <link href="../over.css" rel="stylesheet" >
    <title>Solicitud de Préstamo de Equipo</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm bg-light ">
    	<a class="navbar-brand" href="../index.php">
      <img src="../images/logo.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
      </a> 
        <span class="navbar-text">
       <b>Bienvenido/a <?php echo $_SESSION['Fname'];?></b>
        </span>
        <!-- Links -->
        <ul class="navbar-nav">
          <li>
            <a class="nav-link" href="../profile.php"> Profile </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Solicitudes
            </a>
            <!-- Dropdown -->
            <div class="dropdown-menu">
            <a class="dropdown-item" href="solicitud-general.php">Solicitud</a>
              <a class="dropdown-item" href="solicitud-salon.php">Préstamo de Salón</a>
              <a class="dropdown-item" href="solicitud-auditorio.php">Solicitud del Auditorio 225</a>
              <a class="dropdown-item" href="solicitud-teatro.php">Teatro General</a>
              <a class="dropdown-item" href="solicitud-servicios.php">Solicitud de Servicios</a>
              <a class="dropdown-item" href="solicitud-plantas.php">Solicitud de Plantas</a>
              <a class="dropdown-item active" href="solicitud-prestamoequipo.php">Solicitud de Préstamo de Equipo</a>
              <a class="dropdown-item" href="solicitud-vestibulo.php">Solicitud de Vestíbulo</a>
              <a class="dropdown-item" href="solicitud-conferencias.php">Sala de Conferencias</a>
              <a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSc0DxMjDzRctM5T3T_sDlKFg55HwqU1VcLIB7HpU-LwHBLDUg/viewform"
              target="_blank">Solicitud Instalaciones de la Biblioteca</a>
              <a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSf_i6Gkc6-WIBYzzkSUb6oVEDQyK6-noJla60MQYHFKRlMvSw/viewform"
              target="_blank">Solicitud de Fotografia y Sonido</a>
              <a class="dropdown-item" href="#">Solicitud de Transportación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acreditación</a>
          </li>
         </ul>
         <a><form action = "../logout.php" method ="post"><button type="submit" name="logout" class="btn btn-primary btn-sm">Salir</button></form></a> 
  </nav>
  <div class ="container">
  <div id="accordion">
  <div class="card">
  <div class="card-header">
    <a class="card-link" data-toggle="collapse" href="#collapseOne">
    <h3>Aviso Importante: </h3>
    </a>
  </div>
    <div id="collapseOne" class="collapse" data-parent="#accordion">
    <div class="card-body">
    <ul>
        <p>Es requisito traer la tarjeta de identificación estudiantil para recoger y entregar el equipo y material prestado. 
           El equipo y/o materiales aquí descrito(s) es para uso dentro de las instalaciones de la Universidad de Puerto Rico en Ponce. 
           Se le delega toda la responsabilidad en el (la) solicitante, quien pasará a ser custodio(a) del equipo y/o materiales por el tiempo estipulado, y debe velar y cuidar por su buen funcionamiento.
           Asimismo, el equipo y/o materiales deberá(n) ser devuelto(s) al finalizar la actividad a la Oficina de Actividades Extracurriculares en las mismas condiciones y buen estado en que se le fue entregado. 
           En caso de que la actividad sea fuera del horario regular de trabajo, debe notificarlo y entregarlo(s) en la mañana siguiente.</p>
    </div>
    </div>
  </div>
  </div>
  </div>

          <form action ="submitprestamoequipo.php" method = "POST">
          <div class="form-group">
          <h2>Préstamo de Equipo</h2>
          <?php if (@$_GET['Submited']==True) { ?>
          <div class="alert alert-success alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $_GET['Submited'];?>
          </div>
       <?php 
          }
          ?>  
          <?php if (@$_GET['Vacio']==True) { ?>
          <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $_GET['Vacio'];?>
          </div>
       <?php 
          }
          ?>  
          <?php if (@$_GET['Erorr']==True) { ?>
          <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $_GET['Error'];?>
          </div>
       <?php 
          }
          ?> 
          <b>Nombre del Solicitante</b><input type="text" name="nombreSol" class="form-control" placeholder="Ingresar su nombre">
          <b>Número de estudiante</b><input type="text" name="numEstudiante" class="form-control" placeholder="Ingresar su número de estudiante">
          <b>Descripción del Equipo y/o materiales en préstamo: </b><textarea type="text" name="desEquipo" class="form-control" placeholder="Ingrese los materiales que necesita"></textarea>
          <b>Nombre de la actividad: </b><input type="text" name="nomActividad" class="form-control" placeholder="Ingresar el nombre de la actividad">
          <b>Fecha de la actividad:</b><input type= "date" name="ActDate" class="form-control" placeholder="Ingresar Fecha de uso del Teatro">
          <b>Horario de Inicio:</b><input type= "time" name="ActIni" class="form-control" placeholder="Hora de Incio">
          <b>Horario de Culminación:</b><input type= "time" name="ActFin" class="form-control" placeholder="Hora de Culminación">
          <b>Lugar:</b><input type ="text" name="ActPlace" class ="form-control" placeholder="Lugar de la actividad">
          <b>Propósito:</b><textarea type= "text" name="ActProp" class="form-control" placeholder="Ingresar propósito de uso"></textarea>
          <div id="btnmedio">
            <button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button>
          </div>
          <br><br><br><br><br><br>
          </form>
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