<!-- Pesquisar todas as funÃ§Ãµes MatemÃ¡ticas do PHP-->
<?php // arredondamento dos Numeros com abs...
echo abs(10);
?>
<hr/>

<?php
echo round(2.6); //arredonda pra cima ou pra baixo
?>

<hr/>
<?php
echo ceil(2.5); // Sempre arredonda pra cima!!!
?>

<hr/>
<?php
echo floor(2.9); // Sempre arredonda pra Baixo!!!
?>

<hr/>
<?php
echo rand(0, 100); // Retorna um Número Aleatório...
?>

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