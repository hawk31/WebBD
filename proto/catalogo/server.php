<?php
$var1 = $_POST['variable1'];

$link = mysqli_connect('localhost','root','','ejphp'); 

	    if (!$link) { 
                die('Could not connect to MySQL: ' . mysql_error()); 
        } 

        $query = mysqli_query($link, 'select * from articulo where nombre == $var1');

        if($query == FALSE){
        	echo "Algo has liado en la consulta";
        }
        else{

        	// Primero definimos la cabecera de la tabla

        	echo '<table>
        			<thead>
        				<tr>
        					<th>Referencia</th>
        					<th>Nombre</th>
        					<th>Descripción</th>
        					<th>Color</th>
        					<th>Año</th>
        					<th>Edad Mínima</th>
        					<th>Edad Máxima</th>
        					<th>Precio</th>
        					<th>Stock</th>
        					<th>Marca</th>
        					<th>Colección</th>
        				</tr>
        			<thead>
        			<tbody>
        			</tbody>
        			';

        			echo '</table>';






        	
        }


        $cierre =mysqli_close($link);

        if($cierre){
        	//echo 'Guachi'
        }

        else{
        	echo "Fallo en la desconexión";
        }
















?>