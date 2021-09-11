<?php

    /*
    Existem basicamente duas formas de conectar uma aplicação PHP
com banco de dados:
- MySQLi Extension 
    - Procedural
    - Orientada a objetos
- PDO (PHP Data Objects)
    */

    $host = 'localhost';
    $username = 'root';
    $password = '';

    //Mysqli Orientado a objeto
    $conexao = new mysqli($host, $username, $password);

    //checar se a conexão está funcionando (ok)
    if ($conexao->connect_error) {
        die('Conexão falhou: '.$conexao -> connect_error);
    }
    else
        echo "Conexão OK";
?>
