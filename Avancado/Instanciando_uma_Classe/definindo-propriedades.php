<?php
class Cachorro {
	public $nome;
	private $idade;
}

$cachorro = new Cachorro();
$cachorro->nome = "Lulu";


echo "O nome do meu cachorro é: ".$cachorro->nome;

?>

<br/>

<?php
class Post {
	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;

	public function getTitulo() {
		return $this->titulo;
	}
	public function setTitulo($t) {
		if(is_string($t)) {		
			$this->titulo = $t;
		}
	}
}

$post = new Post();
$post->setTitulo("Titulo de postagem");

echo "Titulo: ".$post->getTitulo();



