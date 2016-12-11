<?php
require $_SERVER ["DOCUMENT_ROOT"] . "/iac/inc/controller/articuloController.php";

$articuloController = new ArticuloController ();
$idArticuloTest = 1;
$articulo = $articuloController->findArticuloById ( $idArticuloTest );
?>
<div class="row" id="cont-com">
	<div class="col-md-12 comentario-header art-titulo">
		'<?=$articulo->getTitulo()?>' (<span id="numComentarios"><?=sizeof($articulo->getComentarios())?></span>
		comentarios)
	</div>
	<?php
	foreach ( $articulo->getComentarios () as $idComentario => $comentario ) {
		?>
		<div class="col-md-12 comentario-container">
			<div class="row">
				<div class="col-md-12 comentario-user">
						#<?=$idComentario?> <?=$comentario->getUsuario()?>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
						<?=$comentario->getComentario()?>
					</div>
			</div>
		</div>
		<?php
	}
	?>
</div>
<br />
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<div class="col-md-12">Nuevo comentario:</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<input id="newComentario" style="width: 100%" type="text"
					name="lname">
			</div>
			<div class="col-md-3 pull-right">
				<button
					onclick="comentarios.envioAjax(<?=$idArticuloTest?>,'Anónimo')"
					type="button" class="btn btn-primary btn-block">Enviar AJAX</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="estado-envio"></div>
			</div>
		</div>
	</div>
</div>
<script src="js/comentarios.js"></script>
