<!-- Alice M. Romero Reyes
    Esta página se utiliza para que el director/a pueda registrar nuevos administradores a la
    página, ya sean decanos, secretarias o directores. Está conectada a registeradmin.php-->
<?php 
include 'sconn.php';
session_start	();
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
    <title>Registrar</title>
  </head>
  <body>
  <!-- El nav se utiliza en todas las pantallas con el logo -->
  <nav class="navbar navbar-light bg-light">
    	  <a class="navbar-brand" href="index.php">
      <img src="images/logo.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
      Plataforma Actividades Extracurriculares
      </a> 
      <a href = "login.php"><button type="button" class="btn btn-primary btn-sm">Log In</button></a> 
  </nav> 
  <!-- Aquí empieza el código-->
    <form action = "registeradmin.php" method = "POST">
    <div class= "form-group">
    <h3> Registrar administrador </h3>
    <?php if (@$_GET['Created']==True) { ?>
          <div class="alert alert-success alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $_GET['Created'];?>
          </div>
       <?php 
          }
          ?>  
    <?php if (@$_GET['Failed']==True) { ?>
          <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $_GET['Failed'];?>
          </div>
       <?php 
          }
          ?> 
           <?php if (@$_GET['Empty']==True) { ?>
          <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php echo $_GET['Empty'];?>
          </div>
       <?php 
          }
          ?>
    <b>Nombre: </b><input type="text" name= "fName" class= "form-control" placeholder = "Ingrese su nombre">
    <b>E-mail: </b> <input type= "email" name = "email" class = "form-control" placeholder = "Ingresa su e-mail">
    <b>Username:</b><input type= "text" name="userName" class="form-control" placeholder="Ingrese usuario">
    <b>Password:</b><input type= "password" name="userPass" class="form-control" placeholder="Ingresar password">
    <b>Cargo:</b><input type= "text" name="cargoUsuario" class="form-control" placeholder="Ingrese el cargo que ocupa">

   <br> <div id="btnmedio">
        <button type="submit" name="submit" value ="submit" class="btn btn-primary">Registrar</button>
    </div>
  </form>
  <br><br><br>
    
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