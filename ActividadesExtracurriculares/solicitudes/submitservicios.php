<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombreSol = $_POST['nombreSol'];
$actdate = $_POST['ActDate'];
$actIni = $_POST['ActIni'];
$actFin = $_POST['ActFin'];
$actPlace = $_POST['ActPlace'];
$descripcion = $_POST['servicioDes'];
$today = date("Y-m-d");

if (isset($_POST['submit'])) {
    if(empty($nombreSol)){
        header ('location:solicitud-servicios.php?Vacio=Completa los campos.');
    }
    elseif(empty($actdate) or empty($actIni))
    {
        header ('location:solicitud-servicios.php?Vacio=Completa los campos.');
    }
    
    else{
        $sql = "INSERT INTO solicitudesservicio (associationID, nombreSol, servicioDes, actDate, actIni, actFin, actPlace, fecha)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'), '$nombreSol', '$descripcion', '$actdate', '$actIni', '$actFin', '$actPlace','$today')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-servicios.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-servicios.php?Error=Error al someter solicitud.');
         }
    }
}
?>