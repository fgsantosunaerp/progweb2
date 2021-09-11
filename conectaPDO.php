<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';

    try {
        $conexao = new PDO("mysql:host=$host;dbname=HR",$username,$password);

        //colocar o modo de erro do PDP para exception
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão OK";
    } catch (PDOException $e) {
        echo "Conexão falhou: ".$e->getMessage();
    }
?>
