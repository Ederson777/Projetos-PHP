<?php
	
class Cachorro {

	public function latir() {
		echo "Au au";
	}
}

$cachorro = new Cachorro();
$cachorro->latir();

?> 




<?php
class Medico {
	public function comprar() {
		echo "Comprei o que queria";
	}
}

$medico = new Medico();
$medico->comprar();

?>