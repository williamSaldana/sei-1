<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////

require ("../../conexion/connection.php"); 

$clave="UCC";

$tmp="";

if ($_POST["texto"] != "") {

	$q=$connection->real_escape_string($_POST['texto']);

	$query="SELECT
    tratamientos.id_tratamiento,
    tratamientos.nombre,
    tratamientos.observaciones,
    tratamientos.status_tratamiento
    FROM
    tratamientos
	WHERE 
		nombre LIKE '%".$q."%' OR
		observaciones LIKE '%".$q."%' OR
        status_tratamiento LIKE '%".$q."%'";
	
}else {
	$query="SELECT tratamientos.id_tratamiento,tratamientos.nombre,
	tratamientos.observaciones,IF(tratamientos.status_tratamiento = '1', 'Activo', 'Inactivo') AS estado
	FROM 
	tratamientos 
	ORDER BY
	tratamientos.id_tratamiento ASC";
	
}
$tmp= '<table class="table">
		<tr class="bg-primary" style="font-weight: bold;">
			<td>NOMBRE</td>
			<td>OBSERVACIONES</td>
            <td>ESTADO</td>
			<td>OPERACIONES</td>
		</tr>';
		
		$res=mysqli_query($connection,$query) or die('error en consulta'.mysqli_error($connection));

		

		while ($row=mysqli_fetch_array($res)) {
			
			$idTratamiento=$row['id_tratamiento'];

			$cadena_encriptada = encrypt($idTratamiento,$clave);

			$tmp.=
			'<tr>
			<td>'.$row['nombre'].'</td>
			<td>'.$row['observaciones'].'</td>
			<td>'.$row['estado'].'</td>
			
			<td align="center">
			<a  class="btn btn-default" href=?page=tratamientos/actualizarTratamiento&i='.$cadena_encriptada.'>
				<span class="icon is-small">
               		<i class="zmdi zmdi-edit"></i>
        		</span>
			</a>
			<a  class="btn btn-default" href=?page=tratamientos/eliminarTratamiento&i='.$cadena_encriptada.'>
				<span class="icon is-small">
            		<i class="zmdi zmdi-close"></i>
            	</span>
			</a>
			</td>
			</tr>';
		}


	$tmp.='</table>';

		
echo $tmp;

function encrypt($string, $key) {
    $result = '';
    for($i=0; $i<strlen($string); $i++) {
       $char = substr($string, $i, 1);
       $keychar = substr($key, ($i % strlen($key))-1, 1);
       $char = chr(ord($char)+ord($keychar));
       $result.=$char;
    }
    return base64_encode($result);
 }
?>