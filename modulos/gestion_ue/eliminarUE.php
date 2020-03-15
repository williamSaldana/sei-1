<?php
	

    $num = $_GET['nombre'];
//exit("prueba".$num);
	EliminarUE($num);

	function EliminarUE($no)
	{
        include "conexion/connection.php";

		$sentencia="DELETE FROM u_experimentales WHERE nombre='".$no."' ";
		//exit("prueba: ".$sentencia);
		$resultado=mysqli_query($connection,$sentencia);
	}
?>

<script type="text/javascript">
alert("Unidad esperimental eliminado exitosamente");
window.location.href = '?page=usuarios/listarusuario';
</script>