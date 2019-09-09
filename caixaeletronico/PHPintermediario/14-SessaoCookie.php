<h1 style="text-align: center">14 - Sessão Cookie</h1>
<p>Inicia-se uma sessão no sistema php com:<br/>
session_start() coloca-se sempre na primeira linha após iniciar o PHP.<br/>
session_start();// iniciar sessão<br/>
echo "Meu nome é: ".$_SESSION["teste"];</p>

<p>
setcookie("meuteste", "Fulano de tal", time()+3600);<b/>

</p>

<?php
session_start();

// Gerar uma sessão
$_SESSION['teste'] = "Bonieky Lacerda";
echo "Minha sessão é de: ".$SESSION['teste'];

// Gerar um cookie
setcookie("meuteste", "Fulano de tal", time()+3600);
echo "Meu cookie é de: ".$_COOKIE["meuteste"];

?>
