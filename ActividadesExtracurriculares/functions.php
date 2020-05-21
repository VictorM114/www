<?php 
function tableHeader(){
    echo '<table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Actividad</th>
        <th>Lugar</th>
        <th>Fecha</th>
        <th>Horario Comienzo</th>
        <th>Horario de Culminación</th>
      </tr>
    </thead>
    <tbody>';
}
function tableActividades(){
  echo '<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Asociación</th>
      <th>Actividad</th>
      <th>Descripción</th>
      <th>Propósito</th>
      <th>Fecha</th>
      <th>Horario Inicio</th>
      <th>Horario Fin</th>
      <th>Lugar</th>
      <th>Sometido en:</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>';
}

function tableSalones(){
  echo '<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Asociación</th>
      <th>Salón</th>
      <th>Propósito</th>
      <th>Fecha</th>
      <th>Horario Inicio</th>
      <th>Horario Fin</th>
      <th>Sometido en:</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>';
}

function tableVestibulo(){
  echo '<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Asociación</th>
      <th>Solicitante</th>
      <th>Propósito</th>
      <th>Fecha</th>
      <th>Horario Inicio</th>
      <th>Horario Fin</th>
      <th>Sometido en:</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>';
}

function tableTeatro(){
  echo '<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Solicitante</th>
      <th>Email</th>
      <th>Número de teléfono</th>
      <th>Equipo audio-visual</th>
      <th>Propósito</th>
      <th>Fecha de uso<th>
      <th>Hora inicio</th>
      <th>Hora culminación<th>
      <th>Cantidad de personas<th>
      <th>Sometido en:</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>';
}

function tableAuditorio(){
  echo '<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Asociación</th>
      <th>Solicitante</th>
      <th>Correo electrónico</th>
      <th>Propósito</th>
      <th>Horario inicio</th>
      <th>Horario de conclusión</th>
      <th>Cantidad de personas</th>
      <th>Departamento</th>
      <th>Fecha de uso</th>
      <th>Lugar</th>
      <th>Sometido en:</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>';
}

function tableServicios(){
  echo '<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Asociación</th>
      <th>Solicitante</th>
      <th>Descripción de Servicio</th>
      <th>Fecha de uso</th>
      <th>Horario inicio</th>
      <th>Horario de conclusión</th>
      <th>Lugar</th>
      <th>Sometido en:</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>';
      
}

function tablePlantas(){
  echo '<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Solicitante</th>
      <th>Fecha de uso</th>
      <th>Propósito</th>
      <th>Cantidad de Plantas</th>
      <th>Horario inicio</th>
      <th>Horario de conclusión</th>
      <th>Lugar<th>
      <th>Sometido en:</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>';
      
}

function tablePrestamoEquipo(){
  echo '<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Solicitante</th>
      <th>Número de estudiante</th>
      <th>Descripción del equipo</th>
      <th>Actividad</th>
      <th>Fecha de la actividad</th>
      <th>Horario de inicio</th>
      <th>Horario de conclusión</th>
      <th>Lugar<th>
      <th>Propósito</th>
      <th>Sometido en:</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>';
}

function tableSalaConferencia(){
  echo '<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Solicitante</th>
      <th>Correo electrónico</th>
      <th>Fecha de uso</th>
      <th>Horario inicio</th>
      <th>Horario de conclusión</th>
      <th>Teléfono</th>
      <th>Proósito<th>
      <th>Uso de equipo audio-visual<th>
      <th>Sometido en:</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>';
      
}
?>