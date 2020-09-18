<?php 
include 'sconn.php';
session_start();

if (isset($_POST['submit'])) {
/*$sql = "SELECT * FROM actividades
    	INNER JOIN asociaciones ON actividades.associationID = asociaciones.associationID
        WHERE statusSol = 'pendiente';";*/
        
        $sql = "UPDATE actividades 
                SET statusSol = 'aprobada'
                WHERE statusSol = 'pendiente';";
        
} 
?>