<?php
    include('config.php');

    $con = new mysqli($host, $user, $password, $dbname);

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    $sql = "insert into locations (street_address, postal_code, city, state_province, country_id) values ('Rua ABC 123', '14000-000', 'Ribeirão Preto', 'SP', 1);";
    $sql .= "insert into locations (street_address, postal_code, city, state_province, country_id) values ('5 Av. Anatole France', '75007', 'Paris', 'FR', 2);";
    $sql .= "insert into locations (street_address, postal_code, city, state_province, country_id) values ('Pça Monsenhor Ascânio Brandão', '12245-440', 'São José dos Campos', 'SP', 1);";

    if($con->multi_query($sql) === TRUE){
        echo "Registros inseridos com sucesso.";
    }
    else {
        echo "Erro: ".$con->error;
    }
    $con->close();
?>