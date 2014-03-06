<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<?php
$var1 = $_POST['variable1'];
$var2 = $_POST['variable2'];
$var3 = $_POST['variable3'];

echo "Quieres comprar $var1 , " , utf8_decode($var3) , ", que tiene un precio de $var2 ";
echo '<br/><br/>';
$link = mysqli_connect('localhost','root','','ejphp'); 
        if (!$link) { 
                die('Could not connect to MySQL: ' . mysql_error()); 
        } 
        //echo 'Conexión realizada con éxito.<br />'; 
        
        $consulta = mysqli_query($link,'select * from articulo');
        if ($consulta == FALSE){
                echo 'Fallo en la ejecución de la consulta';
        } else {
                /*echo 'N&uacute;mero de departamentos: ', mysqli_num_rows($consulta);
                echo '<br /><br />';
                echo "<b>Lista de departamentos:</b>";*/
                
                echo '<table cellpadding="10" cellspacing="20" border="0" class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Color</th>
                                <th>Precio</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                        ';
                while ($fila = mysqli_fetch_assoc($consulta)){
                        echo '<tr><td>',$fila['nombre'],'</td>','<td>',$fila['color'],'</td>','<td>',
                        $fila['precio'],'</td>','<td>',$fila['stock'],'</td>','</tr>';
                }
                echo '</tbody></table>';
                echo '<br /><br />';
        }
        
        $ok = mysqli_close($link); 
        if ($ok){
                //echo 'Desconexi&oacute;n correcta.';
        } else {
                echo 'Fallo en la desconexión';
        }
?>