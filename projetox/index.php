<?php
if(isset($_POST['nome'])) {

	$nome = $_POST['nome'];
	file_put_contents("texte.txt", $nome, FILE_APPEND);

	header("Location: index.php");
} 
?>
<form method="POST">
	<input type="text" name="nome" />
	<input type="submit" value="Enviar" />	
</form>