<?php 
include '../sconn.php';
session_start();
$fullname = $_SESSION['Fname'];
$nombreSol = $_POST['nombreSol'];
$tipoSol = $_POST['solTipo'];
$numEst = $_POST['numEstudiante'];
$desEquipo = $_POST['desEquipo'];
$actName = $_POST['nomActividad'];
$actPlace = $_POST['ActPlace'];
$propact = $_POST['ActProp'];
$actdate = $_POST['ActDate'];
$actIni = $_POST['ActIni'];
$actFin = $_POST['ActFin'];


if (isset($_POST['submit'])) {
    if(empty($nombreSol) or empty($tipoSol)){
        header ('location:solicitud-prestamoequipo.php?Vacio=Completa los campos.');
    }
    elseif(empty($numEst) or empty($desEquipo))
    {
        header ('location:solicitud-prestamoequipo.php?Vacio=Completa los campos.');
    }
    
    else{
        $sql = "INSERT INTO prestamoequipo (associationID, nombreSol, tipoSol, numEst, desEquipo, actName, actPlace, propAct, actDate, actIni, actFin)
        VALUES ((SELECT associationID FROM asociaciones WHERE asocName = '$fullname'), '$nombreSol', '$tipoSol', '$numEst', '$desEquipo', '$actName', '$actPlace', '$propact', '$actdate', '$actIni', '$actFin')";
        
        if ($conn->query($sql) === TRUE) {
            header ('location:solicitud-prestamoequipo.php?Submited=Solicitud enviada.');
        } else {
            header ('location:solicitud-prestamoequipo.php?Error=Error al someter solicitud.');
         }
    }
}
?>