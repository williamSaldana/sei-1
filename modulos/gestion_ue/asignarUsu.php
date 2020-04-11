<?php
require ("../../conexion/connection.php"); 

$query="SELECT usuarios.codigoUCC, CONCAT(usuarios.nombres,' ',usuarios.primer_apellido) AS 'Nombres'
FROM
usuarios";

if ($_POST["texto1"] != "") {

	$q=$connection->real_escape_string($_POST['texto1']);

	$query="SELECT usuarios.codigoUCC, CONCAT(usuarios.nombres,' ',usuarios.primer_apellido) AS 'Nombres'
    FROM
    usuarios
	WHERE 
		codigoUCC LIKE '%".$q."%' OR
        Nombres LIKE '%".$q."%'";
}

		$res=mysqli_query($connection,$query) or die('error en consulta'.mysqli_error($connection));

		$i=0;
		
		$table = array(); 
	
		while ($fila = mysqli_fetch_row($res)) {
			
			$table[]=$fila;
		   $i++;  
		}
echo json_encode($table);
?>

