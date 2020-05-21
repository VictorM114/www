<?php 
include '../sconn.php';
session_start();
//Víctor M. Ayala Hernández
//Variables para utilizar en el query de INSERT
$fullname = $_SESSION['Fname'];
$nombreSol = $_POST['nombreSol'];
$numTel = $_POST['numTel'];
$emailSol = $_POST['email'];
$audioVi = $_POST['audioVi'];
$propact = $_POST['ActProp'];
$actdate = $_POST['ActDate'];
$actIni = $_POST['ActIni'];
$actFin = $_POST['ActFin'];
$cantidadPer = $_POST['cantPers'];
$today = date("Y-m-d");


if (isset($_POST['submit'])) {
    if(empty($nombreSol) or empty($numTel)){
        header ('location:solicitud-teatro.php?Vacio=Completa los campos.');
    }
    elseif(empty($emailSol))
    {
        header ('location:solicitud-teatro.php?Vacio=Completa los campos.');
    }
    
    else{
        $sql = "INSERT INTO actividadesTeatro (associationID, nombreSol, numTel, emailSol, audioVi, actProp, actDate, actIni, actFin, cantPer, fecha)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'), '$nombreSol', '$numTel', '$emailSol', '$audioVi', '$propact', '$actdate', '$actIni', '$actFin', '$cantidadPer', '$today')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-teatro.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-teatro.php?Error=Error al someter solicitud.');
         }
    }
}
?>