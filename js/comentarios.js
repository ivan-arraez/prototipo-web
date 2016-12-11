var comentarios = (function() {
	
	function envioAjax(idArticulo,usuario) {
		//FIXME Como no hay persistencia, el id del comentario y el numero de comentarios los dejo fijos a 42
		comentario = $("#newComentario").val();
		if(comentario.length<1){
			msgWarn("No se pueden enviar comentarios vacíos.");
		} else {
			var parametros = {
	                "action" : "saveComentario",
	                "articulo" : idArticulo,
	                "comentario" : comentario
	        };
	        $.ajax({
	                data:  parametros,
	                url:   'inc/controller/comentariosAction.php',
	                type:  'post',
	                success:  function (response) {
	                	comentarioJSON = JSON.parse(response);
	                	_tpl = getNewComentarioTpl(comentarioJSON.id,comentarioJSON.usuario,comentarioJSON.comentario);
	            		$("#cont-com").append(_tpl);
	            		$("#numComentarios").html(comentarioJSON.numComentarios);
	            		msgOk("Comentario enviado correctamente.");
	                },
	                error: function() {
	                	msgError("No se pudo procesar el comentario.");
	                }
	        });
		}
	}

	var getNewComentarioTpl = function (id,usuario,comentario) {
		tpl = '<div class="col-md-12 comentario-container">'
				+ '<div class="row">'
				+ '<div class="col-md-12 comentario-user">'
				+ '#'+id+' '+usuario
				+ '</div>' + '</div>' + '<div class="row">'
				+ '<div class="col-md-12">'
				+ comentario + '</div>' + '</div>'
				+ '</div>';
		return tpl;
	}
	
	var msgOk = function(txt){
		tpl = "<div class='alert alert-success'>"+
			"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"+
			"<strong>Success!</strong> "+txt+"</div>";
		showMsg(tpl);
	}
	var msgError = function(txt){
		tpl = "<div class='alert alert-danger'>"+
			"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"+
			"<strong>Error!</strong> "+txt+"</div>";
		showMsg(tpl);
	}
	var msgWarn = function(txt){
		tpl = "<div class='alert alert-warning'>"+
			"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"+
			"<strong>Warning!</strong> "+txt+"</div>";
		showMsg(tpl);
	}
	var showMsg = function(tpl){
		$("#estado-envio").fadeIn( "fast" ).html(tpl).click(function (e) {
		    $(this).fadeOut('slow');
		});
	}

	return {
		envioAjax : envioAjax
	}
})();