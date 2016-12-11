<?php
require $_SERVER["DOCUMENT_ROOT"]."/iac/inc/model/dao/ArticuloDAO.php";
class ArticuloController{
	
	private $articuloDAO = null;
	
	function __construct() {
		$this->articuloDAO = new ArticuloDAO();
	}
	
	private function checkDAO(){
		if($this->articuloDAO==null){
			$this->articuloDAO = new ArticuloDAO();
		}
	}
	
	public function findArticuloById ($idArticulo) {
		$this->checkDAO();
		$articulo = $this->articuloDAO->findArticuloById($idArticulo);
		$comentarios = $this->articuloDAO->findComentariosByIdArticulo($idArticulo);
		$articulo->setComentarios($comentarios);
		return $articulo;
	}
	
	public function saveArticuloComentario($idArticulo,$usuario,$comentario){
		//TODO aqui se tiene que accede al DAO para persistir el comentario y generar la respuesta
		$responseJSON = '{"id": "42", "usuario":"'.$usuario.'", "comentario":"'.$comentario.'", "numComentarios":"42"}';
		return $responseJSON;
	}
	
	
	
}
?>