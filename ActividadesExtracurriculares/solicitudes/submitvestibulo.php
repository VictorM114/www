<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombreSol = $_POST['nombreSol'];
$emailSol = $_POST['emailSol'];
$tipoSol = $_POST['solTipo'];
$propact = $_POST['ActProp'];
$actdate = $_POST['ActDate'];
$actIni = $_POST['ActIni'];
$actFin = $_POST['ActFin'];


if (isset($_POST['submit'])) {
    if(empty($nombreSol) or empty($emailSol)){
        header ('location:solicitud-vestibulo.php?Vacio=Completa los campos.');
    }
    elseif(empty($emailSol) or empty($tipoSol))
    {
        header ('location:solicitud-vestibulo.php?Vacio=Completa los campos.');
    }
    
    else{
        $sql = "INSERT INTO actividadesvestibulo (associationID, nombreSol, emailSol, tipoSol, propAct, actDate, actIni, actFin)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'), '$nombreSol', '$emailSol', '$tipoSol', '$propact', '$actdate', '$actIni', '$actFin')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-vestibulo.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-vestibulo.php?Error=Error al someter solicitud.');
         }
    }
}
?>