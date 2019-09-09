<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_caixaeletronico;hot=localhost", "root", "");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}

?>