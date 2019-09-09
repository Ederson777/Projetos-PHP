<?php

$dsn = "mysql:dbname=blog2;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$nome = "Testador 2";
	$email = "teste2@hotmail.com";
	$senha = md5("123");

	$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
	$sql = $pdo->query($sql);

	echo "Usuário inserido ".$pdo->lastInsertId();

} catch(PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}

?>