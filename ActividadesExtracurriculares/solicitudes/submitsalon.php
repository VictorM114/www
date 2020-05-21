<!-- Alice M. Romero Reyes
    Pagina de submitsalon
    contiene el query para validar que no se dejen los campos de la solicitud vacía y se haga el método post para guardar.-->
<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombre = $_POST['nomSolicitante'];
$today = date("Y-m-d");
$email = $_POST['email'];
$proposito = $_POST['proposito'];
$otroProp = $_POST['otroProp'];
$fechaAct = $_POST['fechaAct'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFinal'];
$salon = $_POST['salon']; 

if (isset($_POST['submit'])) {
    if(empty($email)){
        header ('location:solicitud-salon.php?Vacio=Completa los campos.');
    }
    elseif(empty($salon))
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
    else{
        $sql = "INSERT INTO salones (associationID, nomSolicitante, fecha, email, proposito, otroProp, fechaAct, horaInicio, horaFinal, salon)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'),'$nombre', '$today', '$email', '$proposito', '$otroProp', '$fechaAct', '$horaInicio', '$horaFin','$salon')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-salon.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-salon.php?Error=Error al someter solicitud.');
         }
    }
}
?>