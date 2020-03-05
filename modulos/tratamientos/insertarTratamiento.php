<?php

$nombre = $_POST["nombre"];
$observaciones = $_POST["observaciones"];
$estado = $_POST["status_tratamiento"];


	ModificarProducto($nombre,$observaciones,$estado);

	function ModificarProducto($anombre,$aobservaciones,$aestado){
		include "conexion/connection.php";
		
		$sentencia="INSERT INTO 'tratamientos' ('id_tratamiento', 'nombre', 'observaciones', 'status_tratamiento') VALUES (NULL, '".$anombre."', '".$aobservaciones."','".$aestado."') ";
		exit("prueba: ".$sentencia);
        $resultado=mysqli_query($connection,$sentencia);
    }
		?>
			

<script type="text/javascript">
	alert("Registro insertado exitosamente");
	window.location.href='?page=tratamientos/listarTratamiento';
</script>