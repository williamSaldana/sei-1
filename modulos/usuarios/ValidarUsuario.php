<?php
if (isset($_POST["codigoUCC"]))
{
  
$codigoUcc = $_POST["codigoUCC"];

}else{

    $codigoUcc = null;
}

validar($codigoUcc);

function validar($aValidarCodigoUcc){

    include("../../conexion/connection.php");


    $sql="SELECT codigoUCC FROM usuarios WHERE codigoUCC=$aValidarCodigoUcc";
    //exit("prueba: ".$sql);
    $resultado=mysqli_query($connection, $sql);
    $registros=mysqli_num_rows($resultado);
    
if($registros>0){
    
    echo '<script type="text/javascript">
    alert("Ya existe un registro con este codigo");
    window.location.href="../../login.php"
</script>';

}else{
   ?>
<script type="text/javascript">
    alert("Registro NO encontrado");
    window.location.href="../registro/registro_usuario.php"
</script>

<?php
}


}

?>