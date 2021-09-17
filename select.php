<?php
    include('config.php');
?>
<html>
    <head>
        <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
        </style>
    </head>
<body>

<?php
    //verificar a conexão
    $con = new mysqli($host, $user, $password, $dbname);

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    $sql = "select * from locations";
    $res = $con->query($sql);

    if($res->num_rows>0){
        echo "<table><tr><th>Id</th><th>Rua</th><th>Cep</th><th>Cidade</th><th>UF</th><th>País</th></tr>";

        //percorrer o array de resultados
        while($row = $res->fetch_assoc()){
            echo "<tr>
                <td>".$row['location_id']."</td>
                <td>".$row['street_address']."</td>
                <td>".$row['postal_code']."</td>
                <td>".$row['city']."</td>
                <td>".$row['state_province']."</td>
                <td>".$row['country_id']."</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "Não foram encontrados dados.";
    }
    $con->close();
?>
</body>
</html>