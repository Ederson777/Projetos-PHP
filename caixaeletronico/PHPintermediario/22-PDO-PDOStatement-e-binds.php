<?php
$dsn = "mysql:dbname=blog2;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$nome = 'Pedro';
	$id = 8;

	$sql = "UPDATE usuarios SET nome = :novonome WHERE id = :id";
	
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':novonome', $nome);
	$sql->bindValue(':id', $id);
	$sql->execute();

	echo "Usuário atualizado com sucesso!";

} catch(PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}

?>