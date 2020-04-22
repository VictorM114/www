<?php 
session_start();
include '../sconn.php';
?>
<!doctype html>
<html lang="en" lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS utilizando el framework de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="../over.css" rel="stylesheet" >
    <title>Solicitud de Salón</title>
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
              <a class="dropdown-item active " href="solicitud-general.php">Solicitud</a>
              <a class="dropdown-item" href="solicitud-salon.php">Préstamo de Salón</a>
              <a class="dropdown-item" href="#">Solicitud del Auditorio 225</a>
              <a class="dropdown-item" href="#">Teatro General</a>
              <a class="dropdown-item" href="#">Solicitud de Servicios</a>
              <a class="dropdown-item" href="#">Solicitud de Plantas</a>
              <a class="dropdown-item" href="#">Solicitud de Préstamo de Equipo</a>
              <a class="dropdown-item" href="#">Solicitud de Vestíbulo</a>
              <a class="dropdown-item" href="#">Sala de Conferencias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acreditación</a>
          </li>
         </ul>
         <a href="../index.php"><button action ="logout.php" type="button" class="btn btn-primary btn-sm">Salir</button></a> 
  </nav>
<!--Aquí empieza el código-->
<h4 class="container">Al completar este formulario me comprometo a cumplir con las siguientes estipulaciones: <br><br></h4>
<ul class="container">
    <li> El solicitante será responsable por la seguridad de la propiedad: planta física, equipos y materiales, por lo que debe estar presente <br>
    durante la actividad y ser enlace con la Guardia universitaria. No puede mover sillas de un lugar a otro. Al concluir su actividad, debe <br>
    apagar las luces, equipo y aires y dejar todo en completo orden y limpio.<br></li>
    <br>
    <li>Cada Departamento tiene instrucciones específicas sobre el uso y conservación de los salones y sus equipos tales como: puertas con cerraduda <br>
    aire, proyector, pantalla, televisor. Por esta razón, una vez aprobada la solicitud por el Decano (a), debe dialogar con el Director(a) donde <br>
    está adscrito el salón con antelación a su actividad para realizar los arreglos correspondientes.<br></li>
    <br>
    <li>El solicitante deberá comunicarse con la Guardia universitaria para abrir y cerrar el salón, encender y apagar las luces y aire cuando la actividad<br>
    se lleve a cabo fuera del horario regular.<br></li>
    <br>
    <li>Las actividades deberán comenzar y concluir a la hora autorizada. Una vez aprobada la solicitud, NO puede hacer cambios de día ni horario. <br>
    La notificación de la cancelación de la misma debe hacerse con, por lo menos, un día de anticipación.<br></li>
    <br>
    <li>La autorización será confirmada cuando el(la) Decano(a) de Asuntos Académicos firme el visto bueno. El solicitante podrá buscar copia de la solicitud<br>
    en el Decanato donde se le notificará la decisión tomada y entregará copia autorizada al Departamento donde está adscrito el salón antes del día de la<br>
    actividad.<br></li>
    <br>
    <li>La aprobación de salud esta solicitud estará a que la actividad no conflija con actividades del Decanato de Asuntos Académicos, las cuales tendrán prioridad.<br></li>
</ul>
<!--Form de las solicitudes-->
<form action="" method="POST">
          <div class="form-group">
          <h2>Información de actividad</h2>
          <b>Nombre del solicitante</b><input type="text" name= "" class= "form-control" placeholder = "Ingresar nombre del solicitante">
          <b>Fecha:</b><input type= "date" name="" class="form-control" placeholder="Ingresar Fecha de solicitud">
          <b>Correo electrónico:</b><input type= "email" name ="" class="form-control" placeholder="Ingresar su correo eléctronico">
          <b>Funcionario: (Selecciona Una)</b><select class="form-control" id="sel1">
            <option>--</option>
            <option>Facultad</option>
            <option>Administración</option>
            <option>Asociación Estudiantil</option>
            <option>Mentor/Tutor</option>
            <option>Otros</option><input type= "text" name="" class="form-control" placeholder="especifique"> 
          </select>
          <b>Propósito:</b><select class="form-control" id="sel1">
            <option>--</option>
            <option>ofrecer examen</option>
            <option>Reunión/taller/conferencia de Asoc. Estudiantil</option>
            <option>Repaso</option>
            <option>Reunión/taller/conferencia de facultad o administración</option>
            <option>Otro</option><input type= "text" name="" class="form-control" placeholder="especifique">
          </select>
          <b>Fecha:</b><input type= "date" name="" class="form-control" placeholder="Ingresar Fecha de la actividad">
          <b>Horario de Inicio:</b><input type= "time" name="" class="form-control" placeholder="Hora de Inciio">
          <b>Horario de Culminación:</b><input type= "time" name="" class="form-control" placeholder="Hora de Culminación">
          <b>Salón solicitado:</b><input type= "text" name="" class="form-control" placeholder="Lugar de la actividad">         
          </div>
          <div id="btnmedio">
            <button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button>
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
  
