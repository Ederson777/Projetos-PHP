<h1 style="text-align: center">14 - Sess�o Cookie</h1>
<p>Inicia-se uma sess�o no sistema php com:<br/>
session_start() coloca-se sempre na primeira linha ap�s iniciar o PHP.<br/>
session_start();// iniciar sess�o<br/>
echo "Meu nome �: ".$_SESSION["teste"];</p>

<p>
setcookie("meuteste", "Fulano de tal", time()+3600);<b/>

</p>

<?php
session_start();

// Gerar uma sess�o
$_SESSION['teste'] = "Bonieky Lacerda";
echo "Minha sess�o � de: ".$SESSION['teste'];

// Gerar um cookie
setcookie("meuteste", "Fulano de tal", time()+3600);
echo "Meu cookie � de: ".$_COOKIE["meuteste"];

?>
