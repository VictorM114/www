<?php 
/* Este documento es como un documento 
de autenticacion, desde la pantalla de login me 
conecto al server para verificar si
el usuerio que someto en el login existe */
#Incluyo la conexión del servidor 
include 'sconn.php';
session_start();
#Hago una variable username que utiliza el post del login
$username = $_POST['username'];
#lo mismo con esta variable password
$password = $_POST['password'];
//Me gustaría hacer un switch aquí para que sea dependiendo que campoo esté vacío
if (isset($_POST['submit'])) {
    if(empty($_POST['username']) && empty($_POST['password']))
    {   #Empty luego de php? es una variable.
         header("location:login.php?Empty= Por favor completa ambos campos.");
    }
    elseif(!empty($_POST['username']) && empty($_POST['password']))
    {
        header("location:login.php?Empty= Por favor ingresa tu contraseña.");
    }

    elseif(empty($_POST['username']) && !empty($_POST['password']))
    {
        header("location:login.php?Empty= Por favor ingresa tu usuario.");
    }
    else {
            #esta variable query utiliza el statement sql para verificar 
            #si existe el usuario
            $query = "SELECT * FROM users WHERE userName='$username' AND userPass='$password'";
            $result =mysqli_query($conn,$query);

            /*utilizo esta variable con la funcion de php
            mysqliftcharray ya que las tablas en sql se 
            leen como arreglos(eso lei por ahi xd)*/
            $row=mysqli_fetch_array($result);

            if ($row>1){ //Si el resultado del fecth existe
                //me dirijo a profile.php
                $_SESSION['User']=$_POST['username'];
                header("location:profile.php");
            }
            else{
                header("location:login.php?Invalid= Credenciales incorrectos, intenta de nuevo.");
            }
                
    }
}

?>