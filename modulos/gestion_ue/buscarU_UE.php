<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////

require ("../../conexion/connection.php"); 

$tmp="";

$query="SELECT usuarios.codigoUCC, CONCAT(usuarios.nombres,' ',usuarios.primer_apellido) AS 'Nombres'
FROM
usuarios";


if ($_POST["texto"] != "") {

	$q=$connection->real_escape_string($_POST['texto']);

	$query="SELECT usuarios.codigoUCC, CONCAT(usuarios.nombres,' ',usuarios.primer_apellido) AS 'Nombres'
    FROM
    usuarios
	WHERE 
		codigoUCC LIKE '%".$q."%' OR
        Nombres LIKE '%".$q."%'";
	
}

$tmp= '<table class="table">
		<tr class="bg-primary" style="font-weight: bold;">
			<td>CODIGO UCC</td>
			<td>NOMBRES</td>
		</tr>';

		$res=mysqli_query($connection,$query) or die('error en consulta'.mysqli_error($connection));

		

		while ($row=mysqli_fetch_array($res)) {
			$tmp.=
			'<tr>
			<td><a onclick="llenarCampo('.$row['codigoUCC'].');">'.$row['codigoUCC'].'</td>
			<td>'.$row['Nombres'].'</td>
			</tr>';

		}


	$tmp.='</table>';

		
echo $tmp;
?>

