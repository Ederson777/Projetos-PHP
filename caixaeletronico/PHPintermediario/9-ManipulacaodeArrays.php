<h1 style="text-align: center;">Manipula��o de Arrays</h1>
<hr/>
<p>Fun��o: array_keys - Retorna todas as chaves ou uma parte das chaves de um array</p>
<?php
	$array = array(
		"nome" => "Bonieky",
		"idade" => 90,
		"cidade" => "Campina Grande",
		"pais" => "Brasil"
	);

	$array2 = array_keys($array);
	print_r($array2);
?>
<hr/>
<p>Fun��o: array_values - Retorna todos os valores de um array</p>
<?php
	$array = array(
		"nome" => "Bonieky",
		"idade" => 90,
		"cidade" => "Campina Grande",
		"pais" => "Brasil"
	);

	$array2 = array_values($array);
	print_r($array2);
?>
<hr/>

<p>Fun��o: array_shift - Retira o primeiro elemento de um array</p>
<?php
	$array = array(
		"nome" => "Bonieky",
		"idade" => 90,
		"cidade" => "Campina Grande",
		"pais" => "Brasil"
	);

	array_shift($array);
	print_r($array);
?>
<hr/>

<p>Fun��o: array_pop - Retira um elemento do final do array</p>
<?php
	$array = array(
		"nome" => "Bonieky",
		"idade" => 90,
		"cidade" => "Campina Grande",
		"pais" => "Brasil"
	);

	array_pop($array);
	print_r($array);
?>

<hr/>
<p>Fun��o: asort - Ordena um array mantendo a associa��o entre �ndices e valores</p>
<?php
	$array = array(
		"nome" => "Bonieky",
		"idade" => 90,
		"cidade" => "Campina Grande",
		"pais" => "Brasil"
	);

	asort($array);
	print_r($array);
?>
<hr/>

<p>Fun��o: count - Conta o n�mero de elementos de uma vari�vel, ou propriedades de um objeto</p>

<?php
	$array = array(
		"Jos�",
		"Alexandre",
		"Zefinha",
		"Boniek"
	);

	echo "TOTAL DE ALUNOS: ".count($array);
?>

<hr/>
<p>Fun��o: in_array - Checa se um valor existe em um array</p>
<?php
	$array = array(
		"Jos�",
		"Alexandre",
		"Zefinha",
		"Bonieky"
	);

	if(in_array("Alexandre", $array)) {
		echo "Vencedor foi:";
	} else {
		echo "N�o h� vencedores.";
	}
?>
<hr/>