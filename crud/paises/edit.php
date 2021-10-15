<?php
    $host = "localhost";
    $user = "root";
    $password = "password";
    $dbname = "hr";

    $conn = new mysqli($host, $user, $password, $dbname);
    if($conn->connect_error){
        die("Erro na conexão: ".$conn->connect_error);
    }
    else {

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
        }
        else {
            $id = $_GET['id'];
            $sql = "select * from countries where country_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            $dados = $result->fetch_row() ;
            
        }

    }


?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editando país</h1>
</div>
<form method="post" action="paises/edit.php">
  <div class="mb-3">
    <label for="country_id" class="form-label">Id</label>
    <input type="text" class="form-control" id="country_id" name="country_id" value="<?=$dados[0];?>">
  </div>
  <div class="mb-3">
    <label for="country_name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="country_name" name="country_name" value="<?=$dados[1];?>">
  </div>
  <div class="mb-3">
    <label for="region_id" class="form-label">Região</label>
    <input type="text" class="form-control" id="region_id" name="region_id" value="<?=$dados[2];?>">
  </div>

  <button type="submit" class="btn btn-primary">Editar</button>
  <button type="submit" class="btn btn-danger">Apagar</button>
</form>