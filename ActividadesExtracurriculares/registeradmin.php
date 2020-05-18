<?php 
include 'sconn.php';
session_start(); 
#Podemos declarar los post como variables aparte
$nombre = $_POST['fName'];
$email = $_POST['email'];
$user = $_POST['userName'];
$pass = $_POST['userPass'];
$cargo = $_POST['cargoUsuario'];


if (isset($_POST['submit'])) {
    if(empty($nombre) or empty($email))
    {   #Empty luego de php? es una variable.
        header("location:crearadmin.php?Empty= Por favor complete todos los campos.");
    }
    elseif(empty($user) or empty($pass))
    {
        header("location:crearadmin.php?Empty= Por favor completa todos los campos.");
    }
    elseif(empty($cargo))
    {
        header("location:crearadmin.php?Empty= Por favor completa todos los campos.");
    }
    else {
        $sql = "INSERT INTO users (fName, email, userName, userPass, userType, cargoUsuario)
        VALUES ('$nombre','$email', '$user', '$pass', 'admin', '$cargo')";

        if ($conn->query($sql) === TRUE) {
            header ('location:crearadmin.php?Created=Usuario creado satisfactoriamente.');
        } else {
            header ('location:crearadmin.php?Failed=Error al crear usuario.' . $conn->error);
        }  
    }
}
?>