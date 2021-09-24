<?php
    echo "<table style='border: solid 1px blue'>";

    class ResultSet extends RecursiveIteratorIterator{
        function __construct($it){
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current()
        {
            return "<td>".parent::current()."</td>";
        }

        function beginChildren()
        {
            echo "<tr>";
        }

        function endChildren()
        {
            echo "</tr>";
        }
    }

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'hr';

    try {
        $con = new PDO("mysql:host=$server;dbname=$db",$user,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $con->prepare("SELECT location_id, street_address, state_province from locations where city='Ribeirão Preto'");
        $stmt->execute();

        $res = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new ResultSet(new RecursiveIteratorIterator($stmt->fetchAll())) as $key=>$value){
            echo $value;
        }
    }
    catch (PDOException $e) {
        echo "Erro = ".$e->getMessage();
    }
    $con = null;
    echo "</table>";
?>