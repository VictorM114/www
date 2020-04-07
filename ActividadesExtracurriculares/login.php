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
    <title>Iniciar Sesión</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
    	  <a class="navbar-brand" href="#">
      <img src="images/logo.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
      Plataforma Actividades Extracurriculares
      </a> 
  </nav> 
     <form action="plogin.php" method="POST">
      <div class="form-group">
        <h3>Bienvenido/Bienvenida!</h3>    
        <?php if (@$_GET['Empty']==True) { ?>
          <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $_GET['Empty'];?>
          </div>
       <?php 
          }
          ?>  
        <?php if (@$_GET['Invalidpass']==True) { ?>
          <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $_GET['Invalidpass'];?>
          </div>
       <?php 
          }
          ?> 
      <?php if (@$_GET['Userno']==True) { ?>
          <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $_GET['Userno'];?>
          </div>
       <?php 
          }
          ?>
        <b>Username:</b><input type="text" name="username" class="form-control" placeholder="Ingresar usuario">
        <b>Password:</b><input type="password" name="password" class="form-control" placeholder="Ingresar password">
      </div>
        <div id="btnmedio">
        <button type="submit" name="submit" value ="submit" class="btn btn-primary">Ingresar</button>

        </div>
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