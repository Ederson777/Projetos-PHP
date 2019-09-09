<?php

$dsn = "mysql:dbname=blog2;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$novasenha = md5("teste123");

	$sql = "UPDATE usuarios SET senha ='$novasenha' WHERE id = 1";
	$pdo->query($sql);
	// $sql = "UPDATE usuarios SET email = 'abc@hotmail.com' WHERE email = 'suporte@b7web.com.br'";
	// $sql = $pdo->query($sql);

	echo "Senha alterado com sucesso!";

} catch(PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}
?>