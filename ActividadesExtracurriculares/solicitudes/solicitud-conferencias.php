<!-- Alice M. Romero Reyes
    Pagina de solicitud de la sala de conferencias y/o el patio interior
    contiene la solicitud de sala de conferencias y/o el patio interior y las instrucciones guardadas en un card-->
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
    <title>Solicitud de Uso del Patio Interior y/o Sala de Conferencias</title>
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
              <a class="dropdown-item" href="solicitud-auditorio.php">Solicitud del Auditorio 225</a>
              <a class="dropdown-item" href="solicitud-teatro.php">Teatro General</a>
              <a class="dropdown-item" href="solicitud-servicios.php">Solicitud de Servicios</a>
              <a class="dropdown-item" href="solicitud-plantas.php">Solicitud de Plantas</a>
              <a class="dropdown-item" href="solicitud-prestamoequipo.php">Solicitud de Préstamo de Equipo</a>
              <a class="dropdown-item" href="solicitud-vestibulo.php">Solicitud de Vestíbulo</a>
              <a class="dropdown-item active" href="solicitud-conferencias.php">Sala de Conferencias</a>
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
<!--Form de las solicitudes-->
<!--Compromiso, está guardado en un card con la clase container-->
<div class="container">
<div id="accordion">
<div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
      <h3 class="container">Al completar esta solicitud <b>el solicitante se compromete a:</b></h3>
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
          <ul>
          <li>Velar por la seguridad e integridad de las facilidades y de la propiedad: plantas física, equipos,<br>
          materiales, entre otros. Además, matendrá organizadas las mesas y las sillas al concluir su actividad<br>
          y entregarlo en completo orden y limpio. No se removerán sillas de un lugar a otro, sin previa autorización.<br></li>
          <br>
          <li>Notificar a la Guardia Universitaria sobre la culminación de la actividad cuando ésta se llevea cabo<br>
          fuera del horario regular para que cierre la Sala.<br></li>
          <br>
          <li>El solicitante será responsable por las plantas y se compromete a sufragar el costo <br>
          de las mismas en caso de que se extravíen o las dañen.<br></li>
          <br>
          <li>Completar la solicitud en todas sus partes <b> por escrito </b>por los menos con <b>dos semanas</b> de anticipación.<br>
          <b>No se aceptaran solicitudes sin las firmas correspondientes.</b> Una vez aprobada la solicitud <b>NO</b> de harán<br>
          cambios de horario. La notificación de la cancelación de la misma debe hacerse con por lo menos un día de anticipación</li>
          <br>
          <li>La aprobación de esta solicitud estará sujeta a que la actividad no conflija con actividades del Decanata de Asuntos<br>
          Estudiantiles, las cuales tendrán prioridad.</li>
          </ul>
      </div>
    </div>
  </div>
         
        <form action = "submitconferencias.php" method = "POST">
          <div class="form-group">
          <h2>Solicitud de Uso del Patio Interior y/o Sala de Conferencias</h2>
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
          <b>Fecha de uso:</b><input type= "date" name="fechaUso" class="form-control" placeholder="Ingresar fecha de uso">
          <b>Horario de Inicio:</b><input type= "time" name="horaIni" class="form-control" placeholder="Hora de Inicio">
          <b>Horario de Culminación:</b><input type= "time" name="horaFin" class="form-control" placeholder="Hora de Culminación">
          <b>Teléfono</b><input type="text" name="telefono" class= "form-control" placeholder = "teléfono o celular">
          <b>Propósito:</b><select class="form-control" id="sel1" name="proposito">
            <option>--</option>
            <option>Reunión Asociación Estudiantil</option>
            <option>Conferencia Asociación Estudiantil</option>
            <option>Actividad Asociación Estudiantil</option>
            <option>Otro</option>
          </select>
          <b>Especifique:</b><input type= "text" name="otroProp" class="form-control" placeholder="complete este campo si seleccionó otro en la opción anterior">
          <b>Uso de equipo audiovisual:</b><select class="form-control" id="sel1" name="uso">
            <option>--</option>
            <option>Si (deberá ser solicitado en la Oficina del Decano de estudiantes)<br>
            (El uso solo aplica a la Sala de Conferencias)</option>
            <option>No</option>
          </select>
                  
          </div>
          <br><br>
          <div id="btnmedio">
            <button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button>
          </div>
          </form>
          <br><br>
          <
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
  
