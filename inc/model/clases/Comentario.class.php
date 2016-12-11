<?php
class Comentario {
	private $id;
	private $idArticulo;
	private $usuario;
	private $comentario;
	private $fecha;
	function __construct($id, $idArt, $usr, $com, $fech) {
		$this->id = $id;
		$this->idArticulo = $idArt;
		$this->usuario = $usr;
		$this->comentario = $com;
		$this->fecha=$fech;
	}
	public function getId() {
		return $this->id;
	}
	public function getUsuario() {
		return $this->usuario;
	}
	public function getComentario() {
		return $this->comentario;
	}
	public function getFecha(){
		return $this->fecha;
	}
}
?>