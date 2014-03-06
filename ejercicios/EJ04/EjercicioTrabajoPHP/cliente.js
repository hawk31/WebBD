$(function(){
	
    function siRespuesta(r){
        $('#respuesta').html(r);   // Mostrar la respuesta del servidor en el div con el id "respuesta"
    }
 
    function siError(e){
        alert('Ocurri� un error al realizar la petici�n: '+e.statusText);
    }
 
    function peticion(e){
 
        // Obtener valores de los campos de texto
        var parametros = {
            variable1: $('#text1').val(),
            variable2: $('#text2').val(),
           /* variable3 :{
                v31:ksadad,
                v32:sdasd,
            }*/
        };
 
        // Realizar la petici�n
    	var post = $.post(
                              "servidor.php",    // Script que se ejecuta en el servidor
    	                      parametros,    	                       
    	                      siRespuesta,    // Funci�n que se ejecuta cuando el servidor responde
    	                      'html'          // Tipo de respuesta del servidor
                              );
 
        /* Registrar evento de la petici�n (hay mas)
           (no es obligatorio implementarlo, pero es muy recomendable para detectar errores) */
 
    	post.error(siError);         // Si ocurri� un error al ejecutar la petici�n se ejecuta "siError"
    }
 
    function Prueba(r){
        $('#holita').html('Bien hallado');   // Mostrar la respuesta del servidor en el div con el id "respuesta"
    }

    $('#botonCalcular').click(peticion); // Registrar evento al boton "Calcular" con la funcion "peticion"
});