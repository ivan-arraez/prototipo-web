<?php
require $_SERVER["DOCUMENT_ROOT"]."/iac/inc/controller/articuloController.php";

$articuloController = new ArticuloController();
$idArticulo = $_GET["id"];
$articulo = $articuloController->findArticuloById($idArticulo);
?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="row art-titulo"><?=$articulo->getTitulo()?></div>
		<div class="row art-header"><?=$articulo->getAutor()?></div>
		<div class="row art-content">
			<div class="col-md-12">
				<img class="art-img" alt="Imagen de prueba" src="<?=$articulo->getImg()?>" />
			</div>
			<div class="col-md-12">
				<?=$articulo->getContenido()?>
			</div>
		</div>
		<div class="row art-footer"><?=$articulo->getFecha()?></div>
	</div>
</div>
