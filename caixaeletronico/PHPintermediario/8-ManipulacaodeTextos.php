<h1>Manipulação de textos</h1>
<p>Função: explode</p>
<?php
	$nome = "Bonieky Lacerda Leal";
	$x = explode("Lacerda", $nome); // Exploder Ã© o agente separador
	print_r($x);
	echo "<br/>explode";
?>

<hr/>

<p>Função: implode</p>
<?php
	$array = array("Bonieky", "Samuel", "Leal");
	$nomecompleto = implode(" ", $array);
	echo $nomecompleto;
	echo "<br/>implode";
?>
<hr/>

<p>Função: number_format</p>
<?php
	$x = number_format(8.2871872379, 2);
	echo $x;
	echo "<br/>number_format";
?>
<br/><br/>
<?php
	$x = number_format(34989.12123, 2, ",", ".");//imverter as pntuaÃ§Ãµes para formato Brazileiro.
	echo $x;
	echo "<br/>number_format";
?>
<hr/>

<p>Função: str_replace</p>
<?php
	$texto = "O rato roeu a roupa!";
	$string = str_replace("roeu", "comeu", $texto);//Trocador de nomes.
	echo $string;
	echo "<br/>str_replace"
?>
<hr/>

<p>Função: strtolower</p> <!--Transforma texto Maiúculo para minúsculo -->
<?php
	echo strtolower("EDERSON PROGRAMADOR")
?>
<hr/>

<p>Função: strtoupper</p>
<?php //Transforma minúsculo para maiúculo
	echo strtoupper("ederson programador");
?>
<hr/>
<p>Função: substr</p>
<?php // Pegar uma parte de um texto ou de um string
	$texto = "Ederson";
	$x = substr($texto, 0, 3);
	echo $x;
?>

<hr/>

<p>Função: ucfirst</p>
<?php // Poin o primeiro nome em maiúsculo
	$nome = "Bonieky";
	echo ucfirst($nome);	
?>

<hr/>
<p>Função: ucwords</p>
<?php // Transforma a primeira letra de cada nome em maiúculo
	$nome = "ederson samuel de sousa almeida";
	echo ucwords($nome);
?>