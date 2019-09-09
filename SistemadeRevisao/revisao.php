<hr/>
<?php // Sistema de Sorteio aleatório
$lista = array( // Criar um Sistema e um Aplicativo de Revisão 
	"Dreams", 
	"life", 
	"Attactor", 
	"Factor"
);
$x = rand(0, 3);
echo "Review name right now: ".$lista[$x];
?>