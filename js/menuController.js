var menuController = (function(){
	
	var init = function(){
		$(".linkMenu").click(function(event) {
			$(".linkMenu").parent().removeClass( "active" );
			$(".dropdown").removeClass( "active" );
			changeTab(event.target.id);
			$("#"+event.target.id).parent().addClass( "active" );
	    });
		$(".sinLink").click(function(event) {
			alert("Enlace no habilitado");
	    });
		
	};

	var changeTab = function(tab) {
		$( "#main-content" ).load( "inc/view/"+tab+".php" );
	};
	
	var loadContentOnTemplate = function(idArticulo){
		$(".linkMenu").parent().removeClass( "active" );
		$(".dropdown").addClass( "active" );
		$( "#main-content" ).load( "inc/view/templates/tplArticulo.php?id="+idArticulo );
	};
	
	init();
	
	return {
		loadContentOnTemplate:loadContentOnTemplate
	}
	
})();