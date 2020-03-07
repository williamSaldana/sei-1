<?php

$nombre = $_POST["nombre"];
$creacion = $_POST["creacion"];
$estado = $_POST["estado"];

	ModificarUE($nombre,$creacion,$estado);

	function ModificarUE($anombre,$acreacion,$aestado){
		include "conexion/connection.php";
		
		
		$sentencia="UPDATE u_experimentales SET nombre='".$anombre."', creacion= '".$acreacion."', status_uexperimental='".$aestado."' WHERE nombre='".$anombre."' ";
		//exit("prueba".$sentencia);
		$resultado=mysqli_query($connection,$sentencia);

        
	}
?>

<script type="text/javascript">
    alert("Registro Modificado exitosamente");
    window.location.href = '?page=gestion_ue/listarUe';

</script>
