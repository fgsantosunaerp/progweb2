<?php
    include('../config.php');

    //verificar a conexão
    $con = new mysqli($host, $user, $password, $dbname);

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    $sql = "select * from employees order by first_name";
    $res = $con->query($sql);

    if($res->num_rows>0){
        ?>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Novo funcionário</h1>
        </div>

        <?php
    }
        $con->close();
?>
</body>
</html>