function respuesta(r){
	$('#tablavacia').html(r);  // Mostramos respuesta en id "tablavacía"
}

function error(e){
	alert('Algo has liado' +e.statusText);
}

function peticion(p){

	var parametro = {
		variable1: document.getElementById("search").val() // Coge el valor que haya en un input #search
	};

	var post = $.post(

					"server.php", // Voy a ejecutar esto
					parametro,
					respuesta,
					'html'

				);

document.getElementById("searchButton").click(peticion); 


}