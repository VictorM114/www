<?php 
    session_start();
    include 'functions.php';
    include 'sconn.php';
?>
<!doctype html><!--Boostrap Siempre Requiere doctype-->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="over.css">
    <title>Acreditación</title>
  </head>
  <body>
  <!-- El nav se utiliza en todas las pantallas con el logo -->
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
  <div class = "container">
            <div class = "jumbotron">
          <h2>Aquí podrás someter los documentos de Acreditación</h2>
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