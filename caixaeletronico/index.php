<?php
session_start();
if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false) {

} else {
	header("Location: login.php");
	exit;
}
?>
<html>
<head>
	<title>Caixa Eletrônico</title>	<meta charset="utf-8">
</head>
<body>
	<h1>BANCO XYZ</h1>
	Agência: 0000<br/>
	Conta: 0000<br/>
	<a href="sair.php">Sair</a>
</body>
</html>