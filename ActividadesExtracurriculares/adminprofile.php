<?php session_start();#comment?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="over.css">
    <title>Admin Profile</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light ">
    	   <a class="navbar-brand" href="index.php">
      <img src="images/logo.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
      </a> 
        <span class="navbar-text">
        Bienvenido <?php echo $_SESSION['Fname'];?>
        </span>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Solicitudes Pendientes
            </a>
            <!-- Dropdown -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Carta Solicitud</a>
              <a class="dropdown-item" href="#">Préstamo de Salón</a>
              <a class="dropdown-item" href="#">Teatro General</a>
              <a class="dropdown-item" href="#">Solicitud</a>
              <a class="dropdown-item" href="#">Solicitud</a>
              <a class="dropdown-item" href="#">Solicitud</a>
              <a class="dropdown-item" href="#">Solicitud</a>
              <a class="dropdown-item" href="#">Solicitud</a>
              <a class="dropdown-item" href="#">Solicitud</a>
              <a class="dropdown-item" href="#">Solicitud</a>
              <a class="dropdown-item" href="#">Solicitud</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acreditación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reportes</a>
          </li>
         </ul>
  </nav>

  <footer class="footer"> 
      <p>&copy Actividades Extracurriculares UPRP, <?php echo date("Y");?> &copy </p>
</footer>
</body>
</html>