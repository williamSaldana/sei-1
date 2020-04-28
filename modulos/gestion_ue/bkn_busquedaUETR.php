<?php
session_start();


/////// CONEXIÓN A LA BASE DE DATOS /////////

require ("../../conexion/connection.php"); 

$tmp="";

$query="SELECT
u_experimentales.nombre,
count(especimenes.codigo) as 'especimenes',
u_experimentales.creacion as 'creacion',
IF(u_experimentales.status_uexperimental = '1', 'Activo', 'Inactivo') AS estado
FROM
u_experimentales
INNER JOIN especimenes ON especimenes.id_uexperimental = u_experimentales.id_uexperimental
INNER JOIN ue_usuarios ON ue_usuarios.id_uexperimental = u_experimentales.id_uexperimental
INNER JOIN usuarios ON ue_usuarios.id_usuario = usuarios.id_usuario
WHERE
usuarios.codigoUCC = ".$_SESSION['sesion']."
GROUP BY
especimenes.id_uexperimental
ORDER BY
u_experimentales.creacion ASC
";

if ($_POST["texto"] != "") {

	$q=$connection->real_escape_string($_POST['texto']);

	$query="SELECT
    u_experimentales.nombre,
    count(especimenes.codigo) as 'Nº especimenes',
    u_experimentales.creacion as 'creacion',
    IF(u_experimentales.status_uexperimental = '1', 'Activo', 'Inactivo') AS estado
    FROM
    u_experimentales
    INNER JOIN especimenes ON especimenes.id_uexperimental = u_experimentales.id_uexperimental
    INNER JOIN ue_usuarios ON ue_usuarios.id_uexperimental = u_experimentales.id_uexperimental
    INNER JOIN usuarios ON ue_usuarios.id_usuario = usuarios.id_usuario
    WHERE
    usuarios.codigoUCC = ".$_SESSION['sesion']."
		nombre LIKE '%".$q."%' OR
		Nº especimenes LIKE '%".$q."%' OR
        creacion LIKE '%".$q."%'";

        exit("prueba: ".$query);
	
}
$tmp= '<table class="table">
		<tr class="bg-primary" style="font-weight: bold;">
			<td>UNIDAD EXPERIMENTAL</td>
			<td>ESPECIMENES</td>
            <td>CREACION</td>
            <td>ESTADO</td>
			<td>NOTAS</td>
			<td>OPERACIONES</td>
		</tr>';

		$res=mysqli_query($connection,$query) or die('error en consulta'.mysqli_error($connection));

		

		while ($row=mysqli_fetch_array($res)) {
			$tmp.=
			'<tr>
			<td>'.$row['nombre'].'</td>
			<td>'.$row['especimenes'].'</td>
			<td>'.$row['creacion'].'</td>
			<td>'.$row['estado'].'</td>
			<td>
			<a  class="btn btn-default" href=?page=gestion_ue/front_informacionUE&nombre='.$row['nombre'].'>Especimenes</a>
			
			</td>
			<td>
			<a  class="btn btn-default" href=?page=gestion_ue/actualizarUE&nombre='.$row['nombre'].'>
				<span class="icon is-small">
               		<i class="zmdi zmdi-edit"></i>
        		</span>
			</a>
			
			<a  class="btn btn-default" href=?page=gestion_ue/eliminarUE&nombre='.$row['nombre'].'>
				<span class="icon is-small">
            		<i class="zmdi zmdi-close"></i>
            	</span>
			</a>
			
			<a class="button is-hovered" href=?page=gestion_ue/generaQR&nombre='.$row['nombre'].'>
			<span class="icon is-small">
				<i class="zmdi zmdi-apps"></i>
			</span>
			<span>Generar QR</span>
		</a>
			</td>
			</tr>';
		}


	$tmp.='</table>';

		
echo $tmp;
?>