<?php

$id = 1;
$descricao = 'Moto';
$marca = 'Honda';
$modelo = 'Shadow';
$placa = 'XYZ-987';

try {
  $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('UPDATE veiculo SET descricao = :descricao, marca = :marca, modelo = :modelo, placa = :placa WHERE id = :id');
  $stmt->execute(array(
    ':id'   => $id,
    ':descricao' => $descricao,
	':marca' => $marca,
	':modelo' => $modelo,
	':placa' => $placa
  ));

  echo $stmt->rowCount();
} 
catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>