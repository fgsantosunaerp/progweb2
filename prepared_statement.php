<?php
    include('config.php');

    //verificar a conexão
    $con = new mysqli($host, $user, $password, $dbname);

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    
    //preparar e sincronizar (bind)
    $stmt = $con->prepare("insert into locations (street_address, postal_code, city, state_province, country_id) values (?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssi',$rua,$cep, $cidade, $uf, $region_id);

    $rua = "Avenida Presidente Vargas 1000";
    $cep = "14800-000";
    $cidade = "Ribeirão Preto";
    $uf = "SP";
    $region_id = 1;
    $stmt->execute();

    $rua = "Avenida Independência";
    $cep = "14801-000";
    $cidade = "Ribeirão Preto";
    $uf = "SP";
    $region_id = 1;
    $stmt->execute();

    $rua = "Av. Costábile Romano 2201";
    $cep = "14096-900";
    $cidade = "Ribeirão Preto";
    $uf = "SP";
    $region_id = 1;
    $stmt->execute();

    echo "Registros inseridos com sucesso.";

    $stmt->close();
    $con->close();
?>
