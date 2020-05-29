<?php
	

    $num = $_GET['nombre'];
//exit("prueba".$num);
	EliminarUE($num);

	function EliminarUE($no)
	{
        include "conexion/connection.php";

		$sentencia="UPDATE u_experimentales set status_uexperimental= 0 WHERE nombre='".$no."' ";
		//exit("prueba: ".$sentencia);
		$resultado=mysqli_query($connection,$sentencia);
		if ($resultado) { ?>
			<script type="text/javascript">
			alert("Unidad esperimental eliminado exitosamente");
			window.location.href = '?page=gestion_ue/listarUe';
			</script>
		<?php 
		}else{ ?>
			<script type="text/javascript">
			alert("No se pudo realizar la operacion");
			window.location.href = '?page=gestion_ue/listarUe';
			</script>
		<?php
		}
	}
?>

