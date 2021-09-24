<?php
    include('../config.php');

    //verificar a conexão
    $con = new mysqli($host, $user, $password, $dbname);

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    $sql = "select * from regions order by region_name";
    $res = $con->query($sql);

    if($res->num_rows>0){
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    //percorrer o array de resultados
                    while($row = $res->fetch_assoc()){
                        echo "<tr>
                            <td>".$row['region_id']."</td>
                            <td>".$row['region_name']."</td></tr>";
                    }
                    ?>
                
                </tbody>
            </table>
        </div>
    <?php
    }
    else {
        echo "Não foram encontrados dados.";
    }
    $con->close();
?>
</body>
</html>