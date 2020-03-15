<?php

$nombre = $_POST["nombre"];
$observaciones = $_POST["observaciones"];
$estado = $_POST["status_tratamiento"];


	ModificarProducto($nombre,$observaciones,$estado);

	function ModificarProducto($anombre,$aobservaciones,$aestado){
		include "conexion/connection.php";
		
		$sentencia="INSERT INTO tratamientos (nombre, observaciones, status_tratamiento) VALUES ('".$anombre."', '".$aobservaciones."','".$aestado."') ";
		//exit("prueba: ".$sentencia);
		$resultado=mysqli_query($connection,$sentencia);
		if ($resultado) {?>
			<script type="text/javascript">
			alert("Registro insertado exitosamente");
			window.location.href = '?page=tratamientos/listarTratamiento';
			</script>
<?php
		}else {?>
			<script type="text/javascript">
			alert("Registro NO pudo ser insertado");
			window.location.href = '?page=tratamientos/listarTratamiento';
			</script>
			<?php
		}
    }
		?>