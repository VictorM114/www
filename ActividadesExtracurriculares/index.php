<?php 
   include 'sconn.php';
?>
<!-- Alice M. Romero Reyes
    25 de marzo de 2020
    Primer file, index del proyecto-->
<!doctype html>
<html lang="en" lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS utilizando el framework de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="over.css">
    <title>Plataforma de Actividades Extracurriculares</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
    	<a class="navbar-brand" href="#">
    <img src="images/logo.jfif" width="30" height="30" class="d-inline-block align-top" alt=""> 
    Plataforma Actividades Extracurriculares
       </a> 
       <a href = "login.php"><button type="button" class="btn btn-primary btn-sm">Log In</button></a> 
  </nav>
  
<!--Carousel para las imágenes en la pantalla de inicio, serán fotos de las actividades que hagan las asociaciones
    Se utilizó el framework bootstrap-->
<!--Un carousel es básicamente un slideshow-->
<!--Slideshow con fade-->

<!-- Aquí empieza el código-->
<div class = "container">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Asociaciones/IMG_0034.JPG" class="d-block w-100" alt="imagen1">
    </div>
    <div class="carousel-item">
      <img src="images/Asociaciones/IMG_0042.JPG" class="d-block w-100" alt="imagen2">
    </div>
    <div class="carousel-item">
      <img src="images/Asociaciones/IMG_0053.JPG" class="d-block w-100" alt="imagen3">
    </div>
    <div class="carousel-item">
      <img src="images/Asociaciones/IMG_0135.JPG" class="d-block w-100" alt="imagen4">
    </div>
    <div class="carousel-item">
      <img src="images/Asociaciones/IMG_0283.JPG" class="d-block w-100" alt="imagen5">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="strue"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
</div>

<!-- Footer, alineado en el centro-->
<!--Cambie el tag div por footer-->
<footer class="footer"> 
<!--Le quité el id ya que puse las fotos en un container, y la foto se actualiza de acuerdo
al size pero no sobrepasa el footer ni la pantalla-->
  <p>&copy Actividades Extracurriculares UPRP,<?php echo date("Y");?> &copy </p>
</footer>
    <!-- Image and text -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>