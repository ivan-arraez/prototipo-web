<?php
?>
<div class="row">
	<div class="col-md-12">
		<h4 class="comentario-header art-titulo">Prototipo WEB.</h4>

		<p>Esta WEB contiene ejemplos de artículos y comentarios.</p>

		<p>
			Para la cabecera se han utilizado las clases propias de <strong>Bootstrap</strong>,
			por lo que no se ha tenido que añadir ninguna librería externa
		</p>
		<p>
			En la sección <em>'Comentarios'</em> se simulan los comentarios que
			dejan los usuarios sobre un determinado artículo ('Artículo de prueba
			1'). En esta sección se pueden añadir nuevos comentarios haciendo uso
			de un método <strong>AJAX</strong>.
		</p>
		<p>
			En el dropdown list <em>'Artículos'</em> de la cabacera se puede
			acceder a los distintos comentarios pintados sobre la misma
			plantilla.
		</p>
		<p>
			La página <strong>no tiene</strong> configurado ningún acceso a <strong>BBDD</strong>,
			por lo que no se persistirá ningún contenido, y todos datos
			existentes se generan con métodos de test ubicados en los objetos de
			acceso a datos (DAO)
			<code>inc/model/dao/ArticuloDAO.php</code>
			.
		</p>
	</div>
</div>
