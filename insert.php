<?php
    include('config.php');

    $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    //verificar se a conexão foi bem sucedida
    if($con->connect_error){
        die("Falha na conexão: ".$con->connect_error);
    }

    $sql = " insert into countries (country_name, region_id) values ('Senegal', 4)";

    if($con->query($sql) === TRUE ){
        echo "Novo registro inserido.";
    }
    else {
        echo "Falha: ".$sql."\n".$con->error;
    }

    $con->close();
?>