<?php

$codigoUcc = $_POST["codigoUcc"];
$nombres = $_POST["nombres"];
$primerApellido = $_POST["primerApellido"];
$segundoApellido = $_POST["segundoApellido"];
$genero = $_POST["genero"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$rol = $_POST["rol"];

	ModificarProducto($codigoUcc,$nombres,$primerApellido,$segundoApellido,$genero,$telefono,$email,$rol);

	function ModificarProducto($acodigoUcc,$anombres,$aprimerApellido,$asegundoApellido,$agenero,$atelefono,$aemail,$arol){
		include "conexion/connection.php";
		
		$sentencia="UPDATE usuarios SET nombres= '".$anombres."', primer_apellido='".$aprimerApellido."', segundo_apellido= '".$asegundoApellido."', genero= '".$agenero."', telefono= '".$atelefono."', email= '".$aemail."', id_rol= '".$arol."' WHERE codigoUCC='".$acodigoUcc."' ";
		//exit("prueba".$sentencia);
		$resultado=mysqli_query($connection,$sentencia) or die('error en consulta'.mysqli_error($connection));
		if ($resultado) {

			?>
<script type="text/javascript">
alert("Registro Modificado exitosamente");
window.location.href = '?page=usuarios/listarUsuario';
</script>
<?php
		}else {
			?>
<script type="text/javascript">
alert("Registro Modificado exitosamente");
window.location.href = '?page=usuarios/listarUsuario';
</script>
<?php
		}
		}
        
	
?>