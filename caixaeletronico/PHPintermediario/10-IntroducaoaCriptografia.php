<h1 style="text-align: center;">10-Introdu��o � Criptografia</h1>
<hr/>
<p>md5</p>
<?php
$nome = "Bonieky";
$nome2 = md5($nome); //Padr�o irrevers�vel.
echo "Nome Original: ".$nome."<br/>";
echo "Nome Cripto: ".$nome2;

?>
<hr/>
<p>base64_encode</p>
<?php
$nome = "Bonieky";
$nome2 = base64_encode($nome); //Padr�o irrevers�vel.
echo "Nome Original: ".$nome."<br/>";
echo "Nome Cripto: ".$nome2;

?>
<hr/>
<p>base64_decode</p>
<?php
$codigo = "Qm9uaWVreQ==";
echo "Meu texto original �: ".base64_decode($codigo);
?>