<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<?php
$var1 = $_POST['variable1'];
$var2 = $_POST['variable2'];
 
$suma = $var1 + $var2;
echo 'El resultado de la suma fue: '.$suma;
echo '<br/><br/>';
$link = mysqli_connect('localhost','josjimlun','1josjimlun1','facultad'); 
        if (!$link) { 
                die('Could not connect to MySQL: ' . mysql_error()); 
        } 
        //echo 'Conexión realizada con éxito.<br />'; 
        
        $consulta = mysqli_query($link,'select * from departamento');
        if ($consulta == FALSE){
                echo 'Fallo en la ejecución de la consulta';
        } else {
                /*echo 'N&uacute;mero de departamentos: ', mysqli_num_rows($consulta);
                echo '<br /><br />';
                echo "<b>Lista de departamentos:</b>";*/
                
                echo '<table cellpadding="10" cellspacing="0" border="0" class="display c3" id="example">
                        <thead>
                            <tr>
                                <th>Abreviatura</th>
                                <th>Nombre completo</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                        ';
                while ($fila = mysqli_fetch_assoc($consulta)){
                        echo '<tr><td>',$fila['nombre'],'</td>','<td>',
                            $fila['nombrecompleto'],'</td>','<td>','<a href="mailto:',$fila['email'],'">',
                            $fila['email'],'</a>','</td>','</tr>';
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