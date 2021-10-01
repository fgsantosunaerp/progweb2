<?php
    include('../config.php');

    //verificar a conexão
    $conn = new mysqli($host, $user, $password, $dbname);

    if($conn->connect_error){
        die("Erro na conexão: ".$conn->connect_error);
    }
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Novo país</h1>
</div>
<form method="post" action="paises/new.php">
  <div class="mb-3">
    <label for="country_id" class="form-label">Id</label>
    <input type="text" class="form-control" id="country_id" name="country_id">
  </div>
  <div class="mb-3">
    <label for="country_name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="country_name" name="country_name">
  </div>
  <div class="mb-3">
    <label for="region_id" class="form-label">Região</label>
    <input type="text" class="form-control" id="region_id" name="region_id">
  </div>

  <button type="submit" class="btn btn-primary">Inserir</button>
</form>


<?php
    $conn->close();
?>
</body>
</html>