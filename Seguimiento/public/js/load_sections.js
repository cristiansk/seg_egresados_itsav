$(document).on("ready", function(){
	/** Cargando componentes de la aplicacion */
	$("footer").load("ext/footer.html");
	$("header").load("ext/header.html");
	$("nav").load("ext/menu.html");

	$("#page2").click(function(event) {
		$("#infoPersonal").hide();
		$("#datosEscolares").show();
	});

	$("#page3").click(function(event) {
		$("#datosEscolares").hide();
		$("#seccion3").show();
	});

	$("#page4").click(function(event) {
		$("#seccion3").hide();
		$("#infoLaboral").show();
	});

	$("#page5").click(function(event) {
		alert("Has terminado de llenar el registro. Gracias por su colaboracion.");
	});
});