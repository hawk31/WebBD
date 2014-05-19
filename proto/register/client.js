/* Javascript de la inserción */

$(function(){

function respuesta(r){
	$("#enviar").html(r);
}

function error(e){
	alert("Algo has liado" +e.statusText);
}


function peticion(p){
	var valores = {
		usuario: $("#usuario").val(),
		pass: $("#pass").val(),
		name: $("#name").val(),
		email: $("#email").val(),
		tel: $("#tel").val()

	};

	var post = $.post(
		"server.php",
		valores,
		respuesta,
		'html'
		);
}


$("#enviar").click(peticion);


});