<?php
$aluno = array(
	"Nome" => "Bonieky",
	"Idade" => "90",
	"Estado" => "PB",
	"Pais" => "Brasil"
);

foreach($aluno as $chave => $dado) {
	echo $chave." = ".$dado."<br/>";
}


?>