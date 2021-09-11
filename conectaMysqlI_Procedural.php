<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';

    //Mysqli Orientado a objeto
    $conexao = mysqli_connect($host, $username, $password);


    //checar se a conexão está funcionando (ok)
    if (!$conexao) {
        die('Conexão falhou: '.mysqli_connect_error());
    }
    else
        echo "Conexão OK";
?>
