<?php
    include('config.php');

    try {
        //faz a conexão com o BD usando as constantes definidas no arquivo config.php
        $con = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);

        //seta as configurações de erro e exceção
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //comando para criar a tabela
        $sql = "
            create table locations (
                location_id int(11) unsigned not null auto_increment, 
                street_address varchar(50),
                postal_code varchar(12),
                city varchar(30) not null,
                state_province char(2) not null,
                country_id int(11) not null,
                primary key (location_id)
            )";
        $con->exec($sql);
        echo "A tabela foi criada.";
    } 
    catch (PDOException $e) {
        echo $e->getMessage();
    }

    $con = null;
?>