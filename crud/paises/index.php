<?php
   	
	$pdo = new PDO('mysql:host=localhost;dbname=hr', 'root', 'password');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $pdo->query("select * from countries order by country_name;");	
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
                <th scope="col">Região</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                //percorrer o array de resultados
                while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr>
                        <td>".$row['country_id']."</td>
                        <td>".$row['country_name']."</td>
                        <td>".$row['region_id']."</td>
                        <td><a href='index.php?p=paises/edit&id=".$row['country_id']."' class='btn btn-success btn-sm'>Editar</a></td>
                        </tr>";
                }
                ?>
            
            </tbody>
        </table>
    </div>
</body>
</html>