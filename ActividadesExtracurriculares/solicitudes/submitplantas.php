<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$funcionario = $_POST['funcionario'];
$otroFun = $_POST['otroFun'];
$proposito = $_POST['proposito'];
$cantidad = $_POST['cantidad'];
$fechaAct = $_POST['dateUso'];
$lugar = $_POST['lugar'];
$horaInicio = $_POST['hourIni'];
$horaFin = $_POST['hourFin'];


if (isset($_POST['submit'])) {
    if(empty($nombre)){
        header ('location:solicitud-plantas.php?Vacio=Completa los campos.');
    }
    elseif(empty($fecha) or empty($funcionario))
    {
        header ('location:solicitud-plantas.php?Vacio=Completa los campos.');
    }
    elseif(empty($proposito) or empty($cantidad))
    {
        header ('location:solicitud-plantas.php?Vacio=Completa los campos.');
    }
    elseif(empty($fechaAct) or empty($lugar))
    {
        header ('location:solicitud-plantas.php?Vacio=Completa los campos.');
    }
    elseif(empty($horaInicio) or empty($horaFin))
    {
        header ('location:solicitud-plantas.php?Vacio=Completa los campos.');
    }
    else{
        $sql = "INSERT INTO plantas (associationID, nombre, fecha, funcionario, otroFun, proposito, cantidad, dateUso, lugar, hourIni, hourFin)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'),'$nombre', '$fecha', '$funcionario', '$otroFun', '$proposito', '$cantidad', '$fechaAct', '$lugar', '$horaInicio','$horaFin')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-plantas.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-plantas.php?Error=Error al someter solicitud.');
         }
    }
}
?>