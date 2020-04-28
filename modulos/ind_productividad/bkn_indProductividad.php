<?php

require("conexion/connection.php");

$unidadExp = $_POST['unidadExp'];
$experimental = $_POST['experimental'];
$postura = $_POST['postura'];
$peso = $_POST['peso'];
$masa = $_POST['masa'];
$alimentoI = $_POST['alimentoI'];
$alimentoR = $_POST['alimentoR'];
$consumo = $_POST['consumo'];
$eficiencia = $_POST['eficiencia'];

echo $unidadExp;
echo $experimental;
echo $postura;
echo $peso;
echo $masa;
echo $alimentoI;
echo $alimentoR;
echo $consumo;
echo $eficiencia;

$sql="SELECT u_experimentales.id_uexperimental FROM u_experimentales WHERE u_experimentales.nombre = '$experimental'";

$res=mysqli_query($connection,$sql) or die('error en consulta'.mysqli_error($connection));

$idUnidad=mysqli_fetch_array($res);

$fecha = date('Y-m-d');

$sql = "INSERT INTO `productividad` 
(`id_productividad`, `fecha`, `id_uexperimental`, `postura`, `peso_huevo`, `masa_huevo`, `alimento_inicial`, `alimento_residual`, `consumo_alimento`, `eficiencia_produccion`) 
VALUES 
(NULL, '$fecha', '$idUnidad[0]', '$postura', '$peso', '$masa', '$alimentoI', '$alimentoR', '$consumo', '$eficiencia');";

echo($sql);

if(mysqli_query($connection, $sql)){
     echo '<script type="text/javascript">
    alert("Registro insertado exitosamente");
    
    window.location.href="?page=gestion_ue/listarUe";
</script>';
    

} else{ 
    echo '<script type="text/javascript">
    alert("Registro no se pudo insertar");
    
    window.location.href="?page=gestion_ue/listarUe";
</script>';
}

?>