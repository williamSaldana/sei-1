<?php



$codigo = $_POST["codigo"];
$peso = $_POST["peso"];
$fNacimiento = $_POST["fNacimiento"];
$uExperimental = $_POST["uExperimental"];
$estado = $_POST["estado"];

	ModificarEspecimen($codigo,$peso,$fNacimiento,$uExperimental,$estado);

	function ModificarEspecimen($acodigo,$apeso,$aNacimiento,$aUExperimental,$aestado){
		include "../../conexion/connection.php";
		$num = $_GET['dato'];
		
		$sentencia="UPDATE especimenes SET codigo='".$acodigo."', peso= '".$apeso."', f_nacimiento='".$aNacimiento."', id_uexperimental='".$aUExperimental."', status_especimen='".$aestado."' WHERE codigo='".$num."' ";
		//exit("prueba".$sentencia);
		$resultado=mysqli_query($connection,$sentencia);

        
	}
?>

<script type="text/javascript">

alert("Registro Modificado exitosamente");
    window.location.href = '../../?page=especimen/listarEspecimen';

</script>
