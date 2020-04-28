<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombreSol = $_POST['nombreSol'];
$numTel = $_POST['numTel'];
$emailSol = $_POST['email'];
$tipoSol = $_POST['solTipo'];
$audioVi = $_POST['audioVi'];
$propact = $_POST['ActProp'];
$actdate = $_POST['ActDate'];
$actIni = $_POST['ActIni'];
$actFin = $_POST['ActFin'];
$cantidadPer = $_POST['cantPers'];


if (isset($_POST['submit'])) {
    if(empty($nombreSol) or empty($numTel)){
        header ('location:solicitud-teatro.php?Vacio=Completa los campos.');
    }
    elseif(empty($emailSol) or empty($tipoSol))
    {
        header ('location:solicitud-teatro.php?Vacio=Completa los campos.');
    }
    
    else{
        $sql = "INSERT INTO actividadesTeatro (associationID, nombreSol, numTel, emailSol, solTipo, audioVi, actProp, actDate, actIni, actFin, cantPer)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'), '$nombreSol', '$numTel', '$emailSol', '$tipoSol', '$audioVi', '$propact', '$actdate', '$actIni', '$actFin', '$cantidadPer')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-teatro.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-teatro.php?Error=Error al someter solicitud.');
         }
    }
}
?>