<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$email = $_POST['email'];
$fechaUso = $_POST['fechaUso'];
$horaInicio = $_POST['horaIni'];
$horaFin = $_POST['horaFin'];
$funcionario = $_POST['funcionario'];
$areaTrabajo = $_POST['areaTrabajo'];
$telefono = $_POST['telefono'];
$extension = $_POST['extension'];
$proposito = $_POST['proposito'];
$uso = $_POST['uso'];


if (isset($_POST['submit'])) {
    if(empty($fullname) or empty($nombre)){
        header ('location:solicitud-conferencias.php?Vacio=Completa los campos.');
    }
    elseif(empty($fecha) or empty($email))
    {
        header ('location:solicitud-conferencias.php?Vacio=Completa los campos.');
    }
    elseif(empty($fechaUso) or empty($horaInicio))
    {
        header ('location:solicitud-conferencias.php?Vacio=Completa los campos.');
    }
    elseif(empty($horaFin) or empty($funcionario))
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
        $sql = "INSERT INTO conferencia (associationID, nombre, fecha, email, fechaUso, horaIni, horaFin, funcionario, areaTrabajo, telefono, extension, proposito, uso )
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'),'$nombre', '$fecha' ,'$email','$fechaUso' ,'$horaInicio','$horaFin', '$funcionario', '$areaTrabajo', '$telefono ', '$extension', '$proposito', '$uso')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-conferencias.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-conferencias.php?Error=Error al someter solicitud.');
         }
    }
}
?>