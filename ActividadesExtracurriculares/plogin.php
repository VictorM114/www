<?php 
/* Este documento es como un documento 
de autenticacion, desde la pantalla de login me 
conecto al server para verificar si
el usuerio que someto en el login existe */
#Incluyo la conexión del servidor 
include 'sconn.php';
#Hago una variable username que utiliza el post del login
$username = $_POST['username'];
#lo mismo con esta variable password
$password = $_POST['password'];
#esta variable query utiliza el statement sql para verificar 
#si existe el usuario
$query = "SELECT * FROM users WHERE userName='$username' AND userPass='$password' ";
$result =mysqli_query($conn,$query);
/*utilizo esta variable con la funcion de php
mysqliftcharray ya que las tablas en sql se 
leen como arreglos(eso lei por ahi xd)*/
$row=mysqli_fetch_array($result);
if ($row>1){ //Si el resultado del fect existe
    //me dirijo a profile.php
    header("location:profile.php");
}
else{//si no existe doy un script pero hay que cambiar esto como un reload.
    echo "<script>alert('username and password do not match')</script>";
    
}
?>