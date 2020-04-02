<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "extracurriculares";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbName);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully<br>";

        $sql = "SELECT userName, userType FROM users";
        $result = $conn->query($sql);

        if (!empty($result) && $result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "User Name: " . $row["userName"] . " - User Type: " . $row["userType"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
            
    
    ?>
</body>
</html>
