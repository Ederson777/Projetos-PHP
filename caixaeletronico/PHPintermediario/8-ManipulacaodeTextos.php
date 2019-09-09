<h1>Manipula��o de textos</h1>
<p>Fun��o: explode</p>
<?php
	$nome = "Bonieky Lacerda Leal";
	$x = explode("Lacerda", $nome); // Exploder é o agente separador
	print_r($x);
	echo "<br/>explode";
?>

<hr/>

<p>Fun��o: implode</p>
<?php
	$array = array("Bonieky", "Samuel", "Leal");
	$nomecompleto = implode(" ", $array);
	echo $nomecompleto;
	echo "<br/>implode";
?>
<hr/>

<p>Fun��o: number_format</p>
<?php
	$x = number_format(8.2871872379, 2);
	echo $x;
	echo "<br/>number_format";
?>
<br/><br/>
<?php
	$x = number_format(34989.12123, 2, ",", ".");//imverter as pntuações para formato Brazileiro.
	echo $x;
	echo "<br/>number_format";
?>
<hr/>

<p>Fun��o: str_replace</p>
<?php
	$texto = "O rato roeu a roupa!";
	$string = str_replace("roeu", "comeu", $texto);//Trocador de nomes.
	echo $string;
	echo "<br/>str_replace"
?>
<hr/>

<p>Fun��o: strtolower</p> <!--Transforma texto Mai�culo para min�sculo -->
<?php
	echo strtolower("EDERSON PROGRAMADOR")
?>
<hr/>

<p>Fun��o: strtoupper</p>
<?php //Transforma min�sculo para mai�culo
	echo strtoupper("ederson programador");
?>
<hr/>
<p>Fun��o: substr</p>
<?php // Pegar uma parte de um texto ou de um string
	$texto = "Ederson";
	$x = substr($texto, 0, 3);
	echo $x;
?>

<hr/>

<p>Fun��o: ucfirst</p>
<?php // Poin o primeiro nome em mai�sculo
	$nome = "Bonieky";
	echo ucfirst($nome);	
?>

<hr/>
<p>Fun��o: ucwords</p>
<?php // Transforma a primeira letra de cada nome em mai�culo
	$nome = "ederson samuel de sousa almeida";
	echo ucwords($nome);
?>