<?php
class Post {
	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;

	public function __construct($t) {
		$this->setTitulo($t);
		$this->seCorpo($c)
	}

	public function getTitulo() {
		return $this->titulo;
	}
	public function setTitulo($t) {
		if(is_string($t)) {
			$this->titulo = $t;
		}
	}

	public function setCorpo($c) {
		$this->corpo = $c;
	}
}

$post = new Post("Titulo qualquer", "Corpo da minha postagem");

echo "Titulo do post: ".$post->getTitulo();

?>