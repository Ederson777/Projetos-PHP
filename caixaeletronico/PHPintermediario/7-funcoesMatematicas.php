<!-- Pesquisar todas as funções Matemáticas do PHP-->
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
echo rand(0, 100); // Retorna um N�mero Aleat�rio...
?>

<hr/>
<?php // Sistema de Sorteio aleat�rio
$lista = array( // Criar um Sistema e um Aplicativo de Revis�o 
	"Dreams", 
	"life", 
	"Attactor", 
	"Factor"
);
$x = rand(0, 3);
echo "Review name right now: ".$lista[$x];
?>