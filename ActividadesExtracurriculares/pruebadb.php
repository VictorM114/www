<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando el db</title>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "extracu";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
</head>
<body>

</body>
</html>