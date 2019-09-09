<?php
	if (isset($_POST['nome'])) {
		$nome = $_POST['nome'];
		file_put_contents("teste.txt", $nome, FILE_APPEND);

		header("Location: login.php");
	}
?>