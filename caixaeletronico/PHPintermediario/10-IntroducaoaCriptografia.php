<h1 style="text-align: center;">10-Introdução à Criptografia</h1>
<hr/>
<p>md5</p>
<?php
$nome = "Bonieky";
$nome2 = md5($nome); //Padrão irreversível.
echo "Nome Original: ".$nome."<br/>";
echo "Nome Cripto: ".$nome2;

?>
<hr/>
<p>base64_encode</p>
<?php
$nome = "Bonieky";
$nome2 = base64_encode($nome); //Padrão irreversível.
echo "Nome Original: ".$nome."<br/>";
echo "Nome Cripto: ".$nome2;

?>
<hr/>
<p>base64_decode</p>
<?php
$codigo = "Qm9uaWVreQ==";
echo "Meu texto original é: ".base64_decode($codigo);
?>