<meta charset="utf-8">
<?php

$link = mysqli_connect('localhost','root','','juguete');


$query = mysqli_query($link,'SELECT oferta.precioDes AS "precio", oferta.ruta AS "ruta", articulo.nombre AS "nombre" 
							 FROM oferta INNER JOIN articulo ON oferta.deArt = articulo.numref');
$query2 = mysqli_query($link,'SELECT oferta.precioDes AS "precio", oferta.ruta AS "ruta", articulo.nombre AS "nombre" 
							 FROM oferta INNER JOIN articulo ON oferta.deArt = articulo.numref');
$query3 = mysqli_query($link,'SELECT oferta.precioDes AS "precio", oferta.ruta AS "ruta", articulo.nombre AS "nombre" 
							 FROM oferta INNER JOIN articulo ON oferta.deArt = articulo.numref');


if($query==FALSE){
	echo "Algo has liado en la consulta";
}

else{

	// Vamos a definir la cabecera primero


	echo '<table class="table">';
	echo '<tr>';
	while($fila = mysqli_fetch_assoc($query)){

		echo '<td><img src="',$fila['ruta'],'">' ,'</td>';


	}


	echo '</tr>';

	echo '<tr>';

	while($fila2=mysqli_fetch_assoc($query2)){
		echo '<td>',$fila2['nombre'],'</td>';
	}


	echo '</tr>';


	echo '<tr>';

	while($fila3=mysqli_fetch_assoc($query3)){
		echo '<td>',$fila3['precio'].'€','</td>';
	}




	echo '</tr>';
	echo '</table>';



}

    $cierre =mysqli_close($link);







?>