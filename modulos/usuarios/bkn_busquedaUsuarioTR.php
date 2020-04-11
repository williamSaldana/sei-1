<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////

require ("../../conexion/connection.php"); 

$tmp="";

if ($_POST["texto"] != "") {

	$q=$connection->real_escape_string($_POST['texto']);

	$query="SELECT usuarios.codigoUCC, CONCAT(usuarios.nombres,' ',usuarios.primer_apellido) AS 'Nombres',
	usuarios.telefono,
	usuarios.email,
	roles.nombre_rol,
	IF(usuarios.status_usuario = '1', 'Activo', 'Inactivo') AS estado 
	FROM usuarios 
	INNER JOIN roles ON usuarios.id_rol = roles.id_rol
	WHERE 
		codigoUCC LIKE '%".$q."%' OR
		Nombres LIKE '%".$q."%' OR
		telefono LIKE '%".$q."%' OR
		email LIKE '%".$q."%' OR
        nombre_rol LIKE '%".$q."%'";
	
}else {
	$query="SELECT usuarios.codigoUCC, CONCAT(usuarios.nombres,' ',usuarios.primer_apellido) AS 'Nombres',
usuarios.telefono,
usuarios.email,
roles.nombre_rol,
IF(usuarios.status_usuario = '1', 'Activo', 'Inactivo') AS estado
FROM
usuarios
INNER JOIN roles ON usuarios.id_rol = roles.id_rol 
ORDER BY
usuarios.codigoUCC ASC";
}
$tmp= '<table class="table">
		<tr class="bg-primary" style="font-weight: bold;">
			<td>CODIGO UCC</td>
			<td>NOMBRES</td>
            <td>TELEFONO</td>
			<td>EMAIL</td>
			<td>NOMBRE ROL</td>
			<td>ESTADO</td>
			<td>OPERACIONES</td>
		</tr>';

		$res=mysqli_query($connection,$query) or die('error en consulta'.mysqli_error($connection));

		

		while ($row=mysqli_fetch_array($res)) {
			$tmp.=
			'<tr>
			<td>'.$row['codigoUCC'].'</td>
			<td>'.$row['Nombres'].'</td>
			<td>'.$row['telefono'].'</td>
			<td>'.$row['email'].'</td>
            <td>'.$row['nombre_rol'].'</td>
			<td>'.$row['estado'].'</td>
			<td>
			<a  class="btn btn-default" href=?page=usuarios/actualizarUsuario&codigo='.$row['codigoUCC'].'>editar</a>
			<a  class="btn btn-default" href=?page=usuarios/eliminarUsuario&codigo='.$row['codigoUCC'].'>eliminar</a>
			</td>
			</tr>';
		}


	$tmp.='</table>';

		
echo $tmp;
?>