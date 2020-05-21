<!-- Alice M. Romero Reyes
    Pagina de solicitud de auditorio
    contiene la solicitud de auditorio y las instrucciones guardadas en un card-->
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
    <title>Solicitud del Auditorio 225</title>
  </head>
  <body>
  <!--comienza el nav bar-->
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
              <a class="dropdown-item active" href="solicitud-auditorio.php">Solicitud del Auditorio 225</a>
              <a class="dropdown-item" href="solicitud-teatro.php">Teatro General</a>
              <a class="dropdown-item" href="solicitud-servicios.php">Solicitud de Servicios</a>
              <a class="dropdown-item" href="solicitud-plantas.php">Solicitud de Plantas</a>
              <a class="dropdown-item" href="solicitud-prestamoequipo.php">Solicitud de Préstamo de Equipo</a>
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
         <a href="../index.php"><button action ="logout.php" type="button" class="btn btn-primary btn-sm">Salir</button></a> 
  </nav>
<!--Aquí empieza el código-->
<!--Compromiso-->
<div class="container">
<div id="accordion">
<div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
      <h3 class="container">Al completar este formulario me comprometo a cumplir con las siguientes estipulaciones:</h3>
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
          <ul>
          <li>El solicitante será responsable por la seguridad de la propiedad: planta física, equipos y materiales, entre otros, por lo que<br>
          debe estar presente mientras dure la actividad y ser enlace con la Guardia Universitaria. Además, debe mantener organizadas<br>
          las sillas en forma de filas al concluir su actividad y entregarlo en completo orden y limpio. No se removerán sillas de un<br>
          lugar a otro, sin previa autorización.</li>
          <br>
          <li>El usuario será responsable de solicitar a la Oficina de Recursos Físicos todo servicio de movimiento de sillas, mesas y<br>
          plantas, entre otros.</li>
          <br>
          <li>El usuario solicitará al Departamento de Audiovisual el servicio de equipo, grabaciones, fotografía, artes gráficas, servicios de<br>
          proyección y será responsable de devolver los mismos al terminar la actividad.</li>
          <br>
          <li>El solicitante deberá comunicarse con la Guardia Universitaria para abrir y cerrar la instalación, prender y apagar las luces y<br>
          acondicionadores de aire cuando la actividad se lleve a cabo fuera del horario regular. De igual forma le notificará si es
          necesario apoyo extraordinario.</li>
          <br>
          <li>La aprobación de esta solicitud estará sujeta a que la actividad no conflija con actividades del Decanato de Asuntos<br>
          Académicos, las cuales tendrán prioridad.</li>
          <li>El sistema de acondicionador de aire no se utilizará durante ensayos, clases, preparación y decoración sin previa autorización.</li>
          <br>
          <li>El usuario será responsable de recoger los desperdicios de refrigerios, almuerzos y cenas una vez concluya la actividad.</li>
          <br>
          <li>Las actividades deberán comenzar y concluir a la hora solicitada. Una vez aprobada la solicitud, NO se harán cambios de<br>
          horario. La notificación de la cancelación de la misma debe hacerse con, por lo menos, un día de anticipación.</li>
          <br>
          <li>Las solicitudes se harán por escrito, por lo menos, con tres semanas de anticipación. Deberá estar completa en todas sus<br>
          partes.</li>
          <br>
          <li>La notificación de cancelación de la actividad se hará tan pronto se tome la decisión y notificará a la Guardia, Recursos<br>
          Físicos y otras oficinas que brindan servicio al evento.</li>
          <br>
          <li>La autorización será confirmada cuando el (la) Decano(a) de Asuntos Académicos firme el visto bueno. Se enviará copia de<br>
          la solicitud donde se le notificará la decisión tomada.</li>
          <br>
          <li>La capacidad del Auditorio es de <u><b>225</b></u> personas.</li>
          </ul>
      </div>
    </div>
  </div>
 </div>
 </div>
         <!--Form de las solicitudes-->
         <!--código PHP-->
        <form action = "submitauditorio.php" method = "POST">
          <div class="form-group">
          <h2>Solicitud del Auditorio 225</h2>
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
          <!--Campos del form-->
          <b>Nombre del solicitante</b><input type="text" name="nombre" class= "form-control" placeholder = "Ingresar nombre del solicitante">
          <b>Correo electrónico:</b><input type= "email" name ="email" class="form-control" placeholder="Ingresar su correo eléctronico">
          <b>Propósito:</b><select class="form-control" id="sel1" name="proposito">
            <option>--</option>
            <option>Reunión Asociación Estudiantil</option>
            <option>Conferencia Asociación Estudiantil</option>
            <option>Actividad Asociación Estudiantil</option>
            <option>Otro</option>
          </select>
          <b>Especifique:</b><input type= "text" name="otroProp" class="form-control" placeholder="complete este campo si seleccionó otro en la opción anterior">
          <b>Horario inicio:</b><input type= "time" name="horaIni" class="form-control" placeholder="Hora de Inicio">
          <b>Horario de conclusión:</b><input type= "time" name="horaFin" class="form-control" placeholder="Hora de Culminación">
          <b>Cantidad de personas </b><input type="text" name="cantidad" class= "form-control" placeholder = "Ingrese cantidad de personas">
          <b>Departamento/Oficina</b><input type="text" name="departamento" class= "form-control" placeholder = "Conteste la que aplique">
          <b>Fecha de uso:</b><input type= "date" name="fechaUso" class="form-control" placeholder="Ingresar fecha de uso">
          </div>
          <br><br>
          <div id="btnmedio">
            <button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button>
          </div>
          </form>
          <br><br>
                
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