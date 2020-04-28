<?php
require("conexion/connection.php");

$experimental = $_POST['experimental'];
$unidadExp = $_POST['unidadExp'];
$quilla = $_POST['quilla'];
$relacion = $_POST['relacion'];
$inmovilidad = $_POST['inmovilidad'];
$frecuencia = $_POST['frecuencia'];
$sdss = $_POST['sdss'];
$sd = $_POST['sd'];
$rmssd = $_POST['rmssd'];
$bfaf = $_POST['bfaf'];
$temperatura = $_POST['temperatura'];

$sql="SELECT especimenes.id_especimen FROM especimenes WHERE especimenes.codigo = '$unidadExp'";

$res=mysqli_query($connection,$sql) or die('error en consulta'.mysqli_error($connection));

$idUnidad=mysqli_fetch_array($res);

$fecha = date('Y-m-d');
$sql = "INSERT INTO `bienestar` 
        (`id_bienestar`, `fecha`, `id_especimen`, `dannoQuilla`, `relacion_hl`, `inmovilidad_tonica`, `frecuencia_cardiaca`, `sdss`, `sdsd`, `rmssd`, `relacion_bf_af`, `temperatura`) 
        VALUES 
        (NULL,'$fecha', '$idUnidad[0]', '$quilla', '$relacion', '$inmovilidad', '$frecuencia', '$sdss', '$sd', '$rmssd', '$bfaf', '$temperatura')";


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