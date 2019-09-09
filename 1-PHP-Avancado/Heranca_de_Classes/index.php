<?php

class Animal {
	public $nome;
	private $idade;
}

class Cavalo extends Animal {
	private $qualidade_de_patas;
	private $tipo_de_pelo;
}

class Gato {
	private $qualidade_de_patas;
	private $miado;
}

$cavalo = new Cavalo();
$cavalo->nome = "Cavalo 1";

echo "O nome do meu cavalo eh: ".$cavalo->nome;

?>