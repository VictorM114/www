<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombreSol = $_POST['nombreSol'];
$numTel = $_POST['numTel'];
$emailSol = $_POST['email'];
$tipoSol = $_POST['solTipo'];
$audioVi = $_POST['audioVi']
$propact = $_POST['ActProp'];
$actdate = $_POST['ActDate'];
$actIni = $_POST['ActIni'];
$actFin = $_POST['ActFin'];
$cantidadPer = $_POST['cantPers'];


if (isset($_POST['submit'])) {
    if(empty($nombreSol) or empty($numTel)){
        header ('location:solicitud-general.php?Vacio=Completa los campos.');
    }
    elseif(empty($emailSol) or empty($tipoSol))
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