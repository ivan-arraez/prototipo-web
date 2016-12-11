<?php
require $_SERVER ["DOCUMENT_ROOT"] . "/iac/inc/controller/articuloController.php";

$action = $_POST['action'];

if($action=="saveComentario"){
	$articuloController = new ArticuloController ();
	$idArticulo = $_POST['articulo'];
	$usuario = "Anónimo";
	$comentario = $_POST['comentario'];
	echo $articuloController->saveArticuloComentario($idArticulo,$usuario,$comentario);
}
?>