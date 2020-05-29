<?php

include("conexion/connection.php");
    
    $usuario = $_SESSION['sesion'];
    $nota = $_POST['nota'];
    $experimental = $_POST['experimental'];


$fecha = date('Y-m-d');

$sql = "SELECT `id_uexperimental` FROM `u_experimentales` WHERE `nombre`= '$experimental' ";

$result = mysqli_query($connection, $sql);

while($rows=mysqli_fetch_array($result)){
        
    $ex=$rows[0];

}

$sql = "SELECT `id_usuario` FROM `usuarios` WHERE `codigoUCC` = '$usuario'";

$result = mysqli_query($connection, $sql);

while($rows = mysqli_fetch_array($result)){
        
    $codigo=$rows[0];

}

$sql="INSERT INTO 
`notas` (`id_nota`, `fecha`, `comentarios`, `id_uexperimental`, `id_usuario`) 
VALUES 
(NULL, '$fecha', '$nota', '$ex', '$codigo')";

$result = mysqli_query($connection, $sql);

if ($result) {
    echo '<script type="text/javascript">
        alert("Nota insertada exitosamente");
        window.location.href="?page=gestion_ue/listarUe";
    </script>';
    
}else{
    echo '<script type="text/javascript">
    alert("Nota NO pudo ser insertada");
    window.location.href="?page=gestion_ue/listarUe";
</script>';

}
?>