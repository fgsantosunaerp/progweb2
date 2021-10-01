<?php
    include('../config.php');

    $conn = new mysqli($host, $user, $password, $dbname);
    if($conn->connect_error){
        die("Erro na conexão: ".$conn->connect_error);
    }
    else {

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $country_id   = $_POST['country_id'];
            $country_name = $_POST['country_name'];
            $region_id    = $_POST['region_id'];

            $sql = "insert into countries (country_id,country_name,region_id) values ('$country_id','$country_name','$region_id')";
            if($conn->query($sql) === TRUE ){
                echo "Novo registro inserido.";
            }
            else {
                echo "Falha: ".$sql."\n".$conn->error;
            }
        }
        else {
            $id = $_GET['id'];
            $sql = "select * from countries where country_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            print_r($result);
            exit();
            $country_id = $result->fetch_row()[0] ?? false;
            $country_name = $result->fetch_row()[1] ?? false;
            $region_id = $result->fetch_row()[2] ?? false;
        }
    }


?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editando país</h1>
</div>
<form method="post" action="paises/new.php">
  <div class="mb-3">
    <label for="country_id" class="form-label">Id</label>
    <input type="text" class="form-control" id="country_id" name="country_id" value="<?=$country_id;?>">
  </div>
  <div class="mb-3">
    <label for="country_name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="country_name" name="country_name" value="<?=$country_name;?>">
  </div>
  <div class="mb-3">
    <label for="region_id" class="form-label">Região</label>
    <input type="text" class="form-control" id="region_id" name="region_id" value="<?=$region_id;?>">
  </div>

  <button type="submit" class="btn btn-primary">Inserir</button>
</form>