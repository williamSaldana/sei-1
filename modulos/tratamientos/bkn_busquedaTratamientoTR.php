<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////

require ("../../conexion/connection.php"); 

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
	tratamientos.observaciones,tratamientos.status_tratamiento
	FROM 
	tratamientos 
	ORDER BY
	tratamientos.id_tratamiento ASC";
	echo($query);
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
			$tmp.=
			'<tr>
			<td>'.$row['nombre'].'</td>
			<td>'.$row['observaciones'].'</td>
			<td>'.$row['status_tratamiento'].'</td>
			
			<td>
			<a  class="btn btn-default" href=?page=tratamientos/actualizarTratamiento&nombre='.$row['nombre'].'>editar</a>
			<a  class="btn btn-default" href=?page=tratamientos/eliminarTratamiento&nombre='.$row['nombre'].'>eliminar</a>
			</td>
			</tr>';
		}


	$tmp.='</table>';

		
echo $tmp;
?>