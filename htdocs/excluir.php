<?php
require 'config.php';

if (isset($_GET['id']) && empty($_GET['id']) == false) {
	$id = addslashes($_GET['id']);//proteção para do que vem de fora

	$sql = "DELETE FROM usuarios WHERE id = '$id'";
	$pdo->query($sql);

	header("Location: index.php");

} else {
	header("Location: index.php");
}
?>