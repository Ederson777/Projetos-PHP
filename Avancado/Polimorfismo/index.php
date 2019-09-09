<h2>Polimorfismo</h2>

<?php
class Animal {
	public function getNome() {
		echo "getNome da classe Animal";
	}

	public function testar() {
		echo "Testado!";
	}
}
class Cachorro extends Animal {

	public function getNome() {

		$this->testar();
		
	}

}

$Cachorro = new Cachorro();
$Cachorro->getNome();


?>