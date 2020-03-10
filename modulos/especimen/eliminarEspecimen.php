<?php

    $num = $_GET['codigo'];
//exit("prueba".$num);
	EliminarUE($num);

	function EliminarUE($no)
	{
        include "conexion/connection.php";

		$sentencia="DELETE FROM especimenes WHERE codigo='".$no."' ";
		//exit("prueba: ".$sentencia);
		$resultado=mysqli_query($connection,$sentencia);
	}
?>

<script type="text/javascript">
	alert("especimen eliminado exitosamente");
	window.location.href='?page=especimen/listarEspecimen';
</script>