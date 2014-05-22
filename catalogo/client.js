$(function(){// Esto es jQuery puro y duro


var pet = $.post(
		"server2.php",
		respuesta2,
		'html'
	);




function respuesta(r){
	$("#tablavacia").html(r);  // Mostramos respuesta en id "tablavacía"
}

function respuesta2(r){
	$("#publi").html(r);  // Mostramos respuesta en id "publi"
}

function error(e){
	alert('Algo has liado' +e.statusText);
}

function peticion(p){
	console.log("Algo");
	var parametro = {
		variable1: $("#search").val() // Coge el valor que haya en un input #search
	};

	var post = $.post(

					"server.php", // Voy a ejecutar esto
					parametro,
					respuesta,
					'html'
				);

}

$("#searchButton").click(peticion); });
