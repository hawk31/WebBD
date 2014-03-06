<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<?php
$var1 = $_POST['variable1'];
$var2 = $_POST['variable2'];
 
$suma = $var1 + $var2;
echo 'El resultado de la suma fue: '.$suma;
echo '<br/><br/>';
$link = mysqli_connect('localhost','root','','prueba'); 
        if (!$link) { 
                die('Could not connect to MySQL: ' . mysql_error()); 
        } 
        //echo 'Conexión realizada con éxito.<br />'; 
        
        $consulta = mysqli_query($link,'select * from cliente');
        if ($consulta == FALSE){
                echo 'Fallo en la ejecución de la consulta';
        } else {
                /*echo 'N&uacute;mero de departamentos: ', mysqli_num_rows($consulta);
                echo '<br /><br />';
                echo "<b>Lista de departamentos:</b>";*/
                
                echo '<table cellpadding="10" cellspacing="0" border="0" class="display c3" id="example">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>Nombre</th>
                                <th>Teléfono </th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                        ';
                while ($fila = mysqli_fetch_assoc($consulta)){
                        echo '<tr><td>',$fila['usuario'],'</td>','<td>',$fila['contrasenya'],'</td>','<td>',
                        $fila['nombre'],'</td>','<td>',$fila['telefonoFav'],'</td>','<td>',$fila['correo'],'</td>','</tr>';
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