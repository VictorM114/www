<?php 
    session_start();
    include 'sconn2.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="over.css">
    <title>Actividades</title>
</head>
<body>
<div class="container">
            <h2>Actividades Próximas</h2>
            <p>Estas son las actividades próximas</p>            
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Lugar</th>
                  <th>Descripcion</th>
                  <th>Propósito</th>
                  <th>Hora</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    $sql = "SELECT * FROM actividades;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                      #output de las actividades en una tabla
                      while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row['actName'] . "</td>";
                        echo "<td>" . $row['actPlace'] . "</td>";
                        echo "<td>" . $row['actDes'] . "</td>";
                        echo "<td>" . $row['actProp'] . "</td>";
                        echo "<td>" . $row['actTime'] . "</td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<h2>no tiene actividades pendientes </h2>";
                    }
                ?>
              </tbody>
            </table>
          </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>