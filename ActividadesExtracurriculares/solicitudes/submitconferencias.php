<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombre = $_POST['nombre'];
$today = date("Y-m-d");
$email = $_POST['email'];
$fechaUso = $_POST['fechaUso'];
$horaInicio = $_POST['horaIni'];
$horaFin = $_POST['horaFin'];
$otroFun = $_POST['otroFun'];
$areaTrabajo = $_POST['areaTrabajo'];
$telefono = $_POST['telefono'];
$extension = $_POST['extension'];
$proposito = $_POST['proposito'];
$otroProp = $_POST['otroProp'];
$uso = $_POST['uso'];


if (isset($_POST['submit'])) {
    if(empty($nombre)){
        header ('location:solicitud-conferencias.php?Vacio=Completa los campos.');
    }
    elseif(empty($horaFin) or empty($email))
    {
        header ('location:solicitud-conferencias.php?Vacio=Completa los campos.');
    }
    elseif(empty($fechaUso) or empty($horaInicio))
    {
        header ('location:solicitud-conferencias.php?Vacio=Completa los campos.');
    }
    elseif(empty($areaTrabajo) or empty($telefono))
    {
        header ('location:solicitud-conferencias.php?Vacio=Completa los campos.');
    }
    elseif(empty($proposito) or empty($uso))
    {
        header ('location:solicitud-conferencias.php?Vacio=Completa los campos.');
    }
    else{
        $sql = "INSERT INTO conferencia (associationID, nombre, fecha, email, fechaUso, horaIni, horaFin, otroFun, areaTrabajo, telefono, extension, proposito, otroProp, uso)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'),'$nombre', '$today' ,'$email','$fechaUso' ,'$horaInicio','$horaFin', '$otroFun','$areaTrabajo', '$telefono ', '$extension', '$proposito', '$otroProp', '$uso')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-conferencias.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-conferencias.php?Error=Error al someter solicitud.');
         }
    }
}
?>