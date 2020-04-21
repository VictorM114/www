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
    <link rel="stylesheet" href="over.css">
    <title>Solicitud de Salón</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
    	<a class="navbar-brand" href="#">
    <img src="images/logo.jfif" width="30" height="30" class="d-inline-block align-top" alt=""> 
    Plataforma Actividades Extracurriculares
       </a> 
</nav>
<!--Aquí empieza el código-->
<p>Al completar este formulario me comprometo a cumplir con las siguientes estipulaciones: <br>
    * El solicitante será responsable por la seguridad de la propiedad: planta física, equipos y materiales, por lo que debe estar presente <br>
    durante la actividad y ser enlace con la Guardia universitaria. No puede mover sillas de un lugar a otro. Al concluir su actividad, debe <br>
    apagar las luces, equipo y aires y dejar todo en completo orden y limpio.<br>
    <br>
    *Cada Departamento tiene instrucciones específicas sobre el uso y conservación de los salones y sus equipos tales como: puertas con cerraduda <br>
    aire, proyector, pantalla, televisor. Por esta razón, una vez aprobada la solicitud por el Decano (a), debe dialogar con el Director(a) donde <br>
    está adscrito el salón con antelación a su actividad para realizar los arreglos correspondientes.<br>
    <br>
    *El solicitante deberá comunicarse con la Guardia universitaria para abrir y cerrar el salón, encender y apagar las luces y aire cuando la actividad<br>
    se lleve a cabo fuera del horario regular.<br>
    <br>
    *Las actividades deberán comenzar y concluir a la hora autorizada. Una vez aprobada la solicitud, NO puede hacer cambios de día ni horario. <br>
    La notificación de la cancelación de la misma debe hacerse con, por lo menos, un día de anticipación.<br>
    <br>
    *La autorización será confirmada cuando el(la) Decano(a) de Asuntos Académicos firme el visto bueno. El solicitante podrá buscar copia de la solicitud<br>
    en el Decanato donde se le notificará la decisión tomada y entregará copia autorizada al Departamento donde está adscrito el salón antes del día de la<br>
    actividad.<br>
    <br>
    *La aprobación de salud esta solicitud estará a que la actividad no conflija con actividades del Decanato de Asuntos Académicos, las cuales tendrán prioridad.<br>
    <br></p>

<form action="" method="POST">
          <div class="form-group">
          <h2>Información de actividad</h2>
          <b>Nombre del solicitante</b><input type="text" name= "" class= "form-control" placeholder = "Ingresar nombre del solicitante">
          <b>Fecha:</b><input type= "date" name="" class="form-control" placeholder="Ingresar Fecha de la actividad">
          <b>Correo electrónico:</b><input type= "email" name ="" class="form-control" placeholder="Ingresar su correo eléctronico">
          <b>Funcionario: (Selecciona Una)</b><select class="form-control" id="sel1">
            <option>--</option>
            <option>Facultad</option>
            <option>Administración</option>
            <option>Asociac</option>

          </select>
          <b>Propósito:</b><input type= "text" name="" class="form-control" placeholder="Ingresar propósito de la actividad">
          
          <b>Horario de Inicio:</b><input type= "time" name="" class="form-control" placeholder="Hora de Inciio">
          <b>Horario de Culminación:</b><input type= "time" name="" class="form-control" placeholder="Hora de Culminación">
          <b>Lugar:</b><input type= "text" name="" class="form-control" placeholder="Lugar de la actividad">         
          </div>
          <div id="btnmedio">
            <button type="submit" name="submit" value ="submit" class="btn btn-primary">Someter Solicitud</button>
          </div>
         
          </form>

  












