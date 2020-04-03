<?php 

include 'sconn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE userName='$username' AND userPass='$password' ";
$result =mysqli_query($conn,$query); 
$row=mysqli_fetch_array($result);
if ($row>1){
    header("location:profile.php");
}
else{
    echo "<script>alert('username and password do not match')</script>";
}
?>