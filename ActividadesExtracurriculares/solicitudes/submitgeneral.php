<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombreact = $_POST['ActName'];
$descact = $_POST['ActDes'];
$propact = $_POST['ActProp'];
$actdate = $_POST['ActDate'];
$actIni = $_POST['ActIni'];
$actFin = $_POST['ActFin'];
$actPlace = $_POST['ActPlace'];

if (isset($_POST['submit'])) {
    if(empty($nombreact) or empty($descact)){
        header ('location:solicitud-general.php?Vacio=Completa los campos.');
    }
    elseif(empty($propact) or empty($actdate))
    {
        header ('location:solicitud-general.php?Vacio=Completa los campos.');
    }
    else{
        $sql = "INSERT INTO actividades (associationID,actName, actDes, actProp, actDate, horarioInicial, horarioFin, actPlace)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'),'$nombreact', '$descact', '$propact', '$actdate', '$actIni', '$actFin', '$actPlace')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-general.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-general.php?Error=Error al someter solicitud.');
         }
    }
}
?>