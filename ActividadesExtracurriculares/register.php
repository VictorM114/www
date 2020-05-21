<!--Alice M. Romero Reyes
    Validación de los campos de la página de crear usuario-->
<?php 
include 'sconn.php';
session_start(); 
#Podemos declarar los post como variables aparte
$asoname = $_POST['AsoName'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$departamento = $_POST['departamento'];
$consejero = $_POST['consejero'];

if (isset($_POST['submit'])) {
    if(empty($username) or empty($password))
    {   #Empty luego de php? es una variable.
        header("location:crearusuario.php?Empty= Por favor complete todos los campos.");
    }
    elseif(empty($asoname) or empty($email))
    {
        header("location:crearusuario.php?Empty= Por favor completa todos los campos.");
    }
    else {
        $sql = "INSERT INTO users (fName, userName, userPass, userType, email)
                VALUES ('$asoname','$username','$password','user','$email'); 
                INSERT INTO asociaciones (asocName, asocDept, asocCons) 
                VALUES ('$asoname','$departamento','$consejero');";

        if (mysqli_multi_query($conn,$sql)) {
            header ('location:crearusuario.php?Created=Usuario creado satisfactoriamente.');
        } else {
            #echo "Error: " .sql . "<br>" . $conn->error;
            header ('location:crearusuario.php?Failed=Error al crear usuario.');
        }  
    }
}

?>