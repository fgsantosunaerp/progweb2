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
            <h1 class="h2">Funcionários</h1>
            <a href="index.php?p=employees/insert" type="button" class="btn btn-primary">Inserir</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fone</th>
                    <th scope="col">Data</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Salário</th>
                    <th scope="col">Comissão</th>
                    <th scope="col">Gerente</th>
                    <th scope="col">Depto</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    //percorrer o array de resultados
                    while($row = $res->fetch_assoc()){
                        echo "<tr>
                            <td>".$row['employee_id']."</td>
                            <td>".$row['first_name']."</td>
                            <td>".$row['last_name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['phone_number']."</td>
                            <td>".$row['hire_date']."</td>
                            <td>".$row['job_id']."</td>
                            <td>".$row['salary']."</td>
                            <td>".$row['commission_pct']."</td>
                            <td>".$row['manager_id']."</td>
                            <td>".$row['department_id']."</td>
                            </tr>";
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