<?php
    include('../config.php');

    //verificar a conexão
    $con = new mysqli($host, $user, $password, $dbname);

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    $sql = "select * from countries order by country_name";
    $res = $con->query($sql);

    if($res->num_rows>0){
        ?>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Países</h1>
            <a href="index.php?p=paises/new" type="button" class="btn btn-primary">Inserir</a>
        </div>
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
                            <td>".$row['country_id']."</td>
                            <td>".$row['country_name']."</td></tr>";
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