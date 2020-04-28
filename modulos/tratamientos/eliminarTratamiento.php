<?php
	$clave="UCC";

	$num = $_GET['i'];
	
	$cadena_desencriptada = decrypt($num,$clave);

	echo($cadena_desencriptada);

	EliminarTratamiento($cadena_desencriptada);

	function EliminarTratamiento($no)
	{
        include "conexion/connection.php";
		$sentencia="DELETE FROM tratamientos WHERE id_tratamiento='".$no."' ";
		//exit("prueba: ".$sentencia);
		$resultado=mysqli_query($connection,$sentencia) or die('error en consulta'.mysqli_error($connection);

		if ($resultado) {
		?>
			<script type="text/javascript">
			alert("Tratamiento eliminado exitosamente");
			window.location.href = '?page=tratamientos/listarTratamiento';
			</script>
		<?php
		}else{
		?>
			<script type="text/javascript">
			alert("Tratamiento NO pudo ser eliminado");
			window.location.href = '?page=tratamientos/listarTratamiento';
			</script>
		<?php
		}
	}

	function decrypt($string, $key) {
		$result = '';
		$string = base64_decode($string);
		for($i=0; $i<strlen($string); $i++) {
		   $char = substr($string, $i, 1);
		   $keychar = substr($key, ($i % strlen($key))-1, 1);
		   $char = chr(ord($char)-ord($keychar));
		   $result.=$char;
		}
		return $result;
	 }
	
?>
