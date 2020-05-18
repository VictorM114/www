<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombre = $_POST['nomSolicitante'];
$fecha = $_POST['fecha'];
$email = $_POST['email'];
$proposito = $_POST['proposito'];
$otroProp = $_POST['otroProp'];
$fechaAct = $_POST['fechaAct'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFinal'];
$salon = $_POST['salon']; 

if (isset($_POST['submit'])) {
    if(empty($fecha)){
        header ('location:solicitud-salon.php?Vacio=Completa los campos.');
    }
    elseif(empty($email))
    {
        header ('location:solicitud-salon.php?Vacio=Completa los campos.');
    }
    elseif(empty($proposito) or empty($fechaAct))
    {
        header ('location:solicitud-salon.php?Vacio=Completa los campos.');
    }
    elseif(empty($horaInicio) or empty($horaFin))
    {
        header ('location:solicitud-salon.php?Vacio=Completa los campos.');
    }
    elseif(empty($salon))
    {
        header ('location:solicitud-salon.php?Vacio=Completa los campos.');
    }
    else{
        $sql = "INSERT INTO salones (associationID, nomSolicitante, fecha, email, proposito, otroProp, fechaAct, horaInicio, horaFinal, salon)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'),'$nombre', '$fecha', '$email', '$proposito', '$otroProp', '$fechaAct', '$horaInicio', '$horaFin','$salon')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-salon.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-salon.php?Error=Error al someter solicitud.');
         }
    }
}
?>