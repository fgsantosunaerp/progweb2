<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO</title>

  </head>
  <body>
	<h1>Adoro PDO</h1>

	<?php
		$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $pdo->query("SELECT descricao, marca,modelo,placa FROM veiculo;");


		while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			echo "Descrição: {$row['descricao']} - Marca: {$row['marca']} - Modelo: {$row['modelo']} - Placa: {$row['placa']}<br />";
		}
	?>
	
  </body>
</html>