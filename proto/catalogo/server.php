<?php
$var1 = $_POST['variable1'];

$link = mysqli_connect('localhost','root','','juguete'); 

	    if (!$link) { 
                die('Could not connect to MySQL: ' . mysql_error()); 
        } 
        $cadena = "select * from articulo where nombre like '%" . $var1 . "%'";
        echo $cadena;
        $query = mysqli_query($link, $cadena);

        if($query == FALSE){
        	echo "Algo has liado en la consulta";
        }
        else{

        	// Primero definimos la cabecera de la tabla
                echo '<div class="table-responsive">';
        	echo '<table class="table">
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
        			</thead>
        			<tbody>';

                                while($fila = mysqli_fetch_assoc($query)){
                                        echo '<tr><td>',$fila['numref'],'</td>',
                                                '<td>',$fila['nombre'],'</td>',
                                                '<td>',$fila['descripcion'],'</td>',
                                                '<td>',$fila['color'],'</td>',
                                                '<td>',$fila['anyo'],'</td>',
                                                '<td>',$fila['edadmin'],'</td>',
                                                '<td>',$fila['edadmax'],'</td>',
                                                '<td>',$fila['precio']."€" ,'</td>',
                                                '<td>',$fila['stock'],'</td>',
                                                '<td>',$fila['deMarca'],'</td>',
                                                '<td>',$fila['deCol'],'</td></tr>';    

                                }


        			echo '</tbody>';
        			

        			echo '</table>';

                                echo '</div>';




        	
        }


        $cierre =mysqli_close($link);

        if($cierre){
        	//echo 'Guachi'
        }

        else{
        	echo "Fallo en la desconexión";
        }














?>