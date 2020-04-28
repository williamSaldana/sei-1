<?php

include("conexion/connection.php");

$codigoUcc = $_POST["codigoUcc"];
$nombres = $_POST["nombres"];
$primerApellido = $_POST["primerApellido"];
$segundoApellido = $_POST["segundoApellido"];
$genero = $_POST["genero"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$rol = $_POST["rol"];
$contrasenna = $_POST["contrasenna"];
$verificar = $_POST["verificar"];
$estado = $_POST["estado"];

if (strcmp($contrasenna, $verificar) === 0) {

insertarUsuario($codigoUcc,$nombres,$primerApellido,$segundoApellido,$genero,$telefono,$email,$rol,$contrasenna,$estado);

}else{?>

<script type="text/javascript">
alert("Las contraseñas no coinciden");
window.location.href = "?page=usuarios/nuevoUsuario";
</script>
<?php
}
function insertarUsuario($acodigoUcc,$anombres,$aprimerApellido,$asegundoApellido,$agenero,$atelefono,$aemail,$arol,$acontrasenna,$aestado){
    
    include("conexion/connection.php");
    
    $acontrasenna = md5($acontrasenna);
    
    $sql = 'INSERT INTO  usuarios (codigoUCC, nombres, primer_apellido, segundo_apellido, genero, telefono, email , id_rol, password, status_usuario) VALUES ("'.$acodigoUcc.'","'.$anombres.'","'.$aprimerApellido.'","'.$asegundoApellido.'","'.$agenero.'","'.$atelefono.'","'.$aemail.'","'.$arol.'","'.$acontrasenna.'","'.$aestado.'")';
    //exit("prueba: ".$sql);
    
    if(mysqli_query($connection, $sql)){
        echo '<script type="text/javascript">
        alert("Registro insertado exitosamente");
        window.location.href="?page=usuarios/listarUsuario";
    </script>';
    
} else{ 
        echo "No se puedo crear el usuario" . mysqli_error($connection);
    }
}
?>