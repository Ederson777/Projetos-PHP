<?php
if(!empty($_POST['codigo'])) {
	$codigo = $_POST['codigo'];

	if($codigo == 'ederson') {
		header("Location: pagina2.php");
	} else {
		echo "Acesso negado!";
	}
}
?>

<h1>Página 1</h1>

<form method="POST">
	Digite "Ederson" para passar:
	<br/><br/>

	<input type="text" name="codigo" />
	<br/><br/>

	<input type="submit" value="Enviar" />
</form>