<?php

    /*
    Existem basicamente duas formas de conectar uma aplicação PHP
com banco de dados:
- MySQLi Extension 
    - Procedural
    - Orientada a objetos
- PDO (PHP Data Objects)
    */

    include('config.php');

    //Mysqli Orientado a objeto
    $conexao = new mysqli(DB_NAME,DB_USER,DB_PASSWORD);

    //checar se a conexão está funcionando (ok)
    if ($conexao->connect_error) {
        die('Conexão falhou: '.$conexao -> connect_error);
    }
    else
        echo "Conexão OK";
?>
