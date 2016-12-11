<?php
class Articulo {
	private $id;
	private $titulo;
	private $img;
	private $autor;
	private $contenido;
	private $fecha;
	private $comentarios;
	function __construct($id, $tit, $img, $aut, $txt, $fech) {
		$this->id = $id;
		$this->titulo = $tit;
		$this->img = $img;
		$this->autor = $aut;
		$this->contenido = $txt;
		$this->fecha=$fech;
	}
	public function getId() {
		return $this->id;
	}
	public function getTitulo() {
		return $this->titulo;
	}
	public function getImg() {
		return $this->img;
	}
	public function getAutor() {
		return $this->autor;
	}
	public function getContenido() {
		return $this->contenido;
	}
	public function getFecha(){
		return $this->fecha;
	}
	public function getComentarios(){
		return $this->comentarios;
	}
	public function setComentarios($lista){
		$this->comentarios = $lista;
	}
}
?>