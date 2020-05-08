<?php 
function tableHeader(){
    echo '<table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Actividad</th>
        <th>Lugar</th>
        <th>Fecha</th>
        <th>Horario Comienzo</th>
        <th>Horario de Culmunación</th>
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
      <th>Salon</th>
      <th>Propósito</th>
      <th>Fecha</th>
      <th>Horario Inicio</th>
      <th>Horario Fin</th>
      <th>Funcionario</th>
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
      <th>Tipo</th>
      <th>Propósito</th>
      <th>Fecha</th>
      <th>Horario Inicio</th>
      <th>Horario Fin</th>
      <th>Estatus</th>
    </tr>
  </thead>
  <tbody>';
}
?>