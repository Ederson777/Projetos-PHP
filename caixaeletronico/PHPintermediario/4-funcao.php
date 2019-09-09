<?php
// nome da função não pode ser numero e ter caracteres especiais
function somarNumero($x, $y) {
		$conta = $x + $y;
 		return $x + $y;	
}
$resultado = somarNumero(10, 20);
echo "Resultado: ".$resultado;
?>

<hr/>

<?php
function mostrarNome() {
	return "Ederson";	
}
echo "Meu nome �: ".mostrarNome();

?>