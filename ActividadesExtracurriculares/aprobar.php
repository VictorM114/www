<?php 

if (isset($_POST['submit'])) {
/*$sql = "SELECT * FROM actividades
    	INNER JOIN asociaciones ON actividades.associationID = asociaciones.associationID
        WHERE statusSol = 'pendiente';";*/
        
$sql = "UPDATE actividades 
        SET statusSol = 'aprobada' ;" ;
}
?>

