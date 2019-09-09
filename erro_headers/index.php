<?php
if(!empty($_POST['codigo'])) {
	$codigo = $_POST['codigo'];

	if($codigo == 'ederson') {
		header("Location: pagina2.php");
	} else {
		echo "<h1>Acesso negado!</>";
	}
}
?>

<h1>Página 1</h1>

<form method="POST">
	Digite "ederson" para passar:
	<br/><br/>

	<input type="text" name="codigo" />
	<br/><br/>

	<input type="submit" name="Enviar" />	
</form>