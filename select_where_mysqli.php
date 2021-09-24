<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>PHP com MySQLi</h1>

    <?php
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'hr';

        $con = new mysqli($server,$user,$password,$db);

        if($con->connect_error){
            die("Erro na conexão: ".$con->connect_error);
        }

        $sql = "SELECT location_id, street_address, state_province from locations where city='Ribeirão Preto'";
        $res = $con->query($sql);

        echo "<a href='insert_location.php' class='btn btn-primary'>Inserir</a>";

        if($res->num_rows > 0){
            echo "<table class='table table-striped'>";
            echo "<tr><th>Id</th><th>Endereço</th><th>UF</th>";

            while ($row = $res->fetch_assoc()){
                echo "<tr><td>".$row['location_id']."</td><td>".$row['street_address']."</td><td>".$row['state_province']."</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "Sem resultados.";
        }
        $con->close();
    ?>



  </body>
</html>