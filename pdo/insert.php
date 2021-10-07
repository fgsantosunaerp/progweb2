<?php
	$username = 'root';
	$password = '';

	try {
	  $pdo = new PDO('mysql:host=localhost;dbname=test', $username, $password);
	  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	  $stmt = $pdo->prepare('INSERT INTO veiculo (descricao,marca,modelo,placa) VALUES(:descricao,:marca,:modelo,:placa)');
	  $dados = [
		'descricao' => 'Carro',
		'marca' => 'Chevrolet',
		'modelo' => 'Cruze',
		'placa' => 'ABC-1234'
	  ];
	  
	  $stmt->execute($dados);

	  echo $stmt->rowCount();
	} 
	catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	}
   ?>