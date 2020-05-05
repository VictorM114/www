<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$funcionario = $_POST['funcionario'];
$email = $_POST['email'];
$proposito = $_POST['proposito'];
$horaIni = $_POST['horaIni'];
$horaFin = $_POST['horaFin'];
$cantidad = $_POST['cantidad'];
$departamento = $_POST['departamento'];
$fechaUso = $_POST['fechaUso'];


if (isset($_POST['submit'])) {
    if(empty($nombre) or empty($fecha)){
        header ('location:solicitud-auditorio.php?Vacio=Completa los campos.');
    }
    elseif(empty($funcionario) or empty($email))
    {
        header ('location:solicitud-auditorio.php?Vacio=Completa los campos.');
    }
    elseif(empty($proposito) or empty($horaIni))
    {
        header ('location:solicitud-auditorio.php?Vacio=Completa los campos.');
    }
    elseif(empty($horaFin) or empty($cantidad))
    {
        header ('location:solicitud-auditorio.php?Vacio=Completa los campos.');
    }
    elseif(empty($departamento) or empty($fechaUso))
    {
        header ('location:solicitud-auditorio.php?Vacio=Completa los campos.');
    }
    else{
        $sql = "INSERT INTO auditorio (associationID, nombre, fecha, funcionario, email, proposito, horaIni, horaFin, cantidad, departamento, fechaUso)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'),'$nombre', '$fecha', $funcionario', '$email', '$proposito', '$horaIni', '$horaFin','$cantidad', '$departamento', '$fechaUso')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-auditorio.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-auditorio.php?Error=Error al someter solicitud.');
         }
    }
}
?>