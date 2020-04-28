<?php

$nombre = $_POST["nombre"];
$observaciones = $_POST["observaciones"];
$estado = $_POST["status_tratamiento"];


	ModificarProducto($nombre,$observaciones,$estado);

	function ModificarProducto($anombre,$aobservaciones,$aestado){
		include "conexion/connection.php";
		
		$sentencia="UPDATE tratamientos SET nombre='".$anombre."', observaciones= '".$aobservaciones."', status_tratamiento='".$aestado."' WHERE nombre='".$anombre."'";
		
		$resultado=mysqli_query($connection,$sentencia) or die('error en consulta'.mysqli_error($connection));
		
		if ($resultado) {?>
			<script type="text/javascript">
			alert("Registro Modificado exitosamente");
			window.location.href='?page=tratamientos/listarTratamiento';
			</script>
			<?php
		}else {?>
			<script type="text/javascript">
			alert("Registro NO pudo ser Modificado");
			window.location.href='?page=tratamientos/listarTratamiento';
			</script>
			<?php
		}
    }
		?>
			

