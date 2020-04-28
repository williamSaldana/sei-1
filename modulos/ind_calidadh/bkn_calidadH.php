<?php

require("conexion/connection.php");

$experimental = $_POST['experimental'];
$unidadExp = $_POST['unidadExp'];
$peso = $_POST['peso'];
$color = $_POST['color'];
$inclusiones = $_POST['inclusiones'];
$albumina = $_POST['albumina'];
$pAlbumina = $_POST['pAlbumina'];
$unidades = $_POST['unidades'];
$colorCascara = $_POST['colorCascara'];
$pesoCascara = $_POST['pesoCascara'];
$ecuador = $_POST['ecuador'];
$poloAncho = $_POST['poloAncho'];
$poloAgudo = $_POST['poloAgudo'];


$sql="SELECT especimenes.id_especimen FROM especimenes WHERE especimenes.codigo = '$unidadExp'";

$res=mysqli_query($connection,$sql) or die('error en consulta'.mysqli_error($connection));

$idUnidad=mysqli_fetch_array($res);

$fecha = date('Y-m-d');
$sql = "INSERT INTO `calidad_huevo` 
(`id_calidadh`, `fecha`, `id_especimen`, `peso_huevo`, `color_yema`, `inclusiones`, `altura_albumina`, `peso_albumina`, `u_haugh`, `color_cascara`, `peso_cascara`, `ecuador`, `polo_ancho`, `polo_agudo`) 
VALUES 
(NULL, '$fecha', '$idUnidad[0]', '$peso', '$color', '$inclusiones', '$albumina', '$pAlbumina', '$unidades', '$colorCascara', '$pesoCascara', '$ecuador', '$poloAncho', '$poloAgudo')";

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