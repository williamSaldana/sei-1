<?php

session_start();
$_SESSION["experimental"] = $_GET['nombre'];;

if(isset($_GET['funcion'])){

    $funcion = $_GET['funcion'];
    $funcion();
    
  }

  function ejecutar(){
    $arreglo = array();

    $arreglo = json_decode($_GET['array']);

    $arreglo = (array) $arreglo;

    echo(print_r($arreglo));

    agregaUE();
    agregaUsuarios($arreglo);

  }

function agregaUE(){
    
    include("../../conexion/connection.php");
        
    $nombre = $_GET['nombre'];
    $estado = $_GET['estado'];
    
    $sql = 'INSERT INTO  u_experimentales (nombre, creacion, status_uexperimental) VALUES ("'.$nombre.'","'.date("Y-m-d").'","'.$estado.'")';
    
    $resultado = mysqli_query($connection, $sql);

    if ($resultado) {
            
        echo("Unidad experimental registrada");
        
    }else {
            
            echo("NO se pudo realizar el registro Unidad");
    }
}
  
function agregaUsuarios($usua){

    include("../../conexion/connection.php");
    
    $nombre = $_GET['nombre'];
    $estado = $_GET['estado'];
      
    $sql = "SELECT id_uexperimental FROM u_experimentales WHERE nombre = '$nombre'";
    
    $resultado=mysqli_query($connection, $sql);
    
    while($rows=mysqli_fetch_array($resultado)){
        
        $ex=$rows[0];
    
    }
    
    foreach ($usua as $value) {
        
        $sql = "SELECT id_usuario FROM usuarios WHERE codigoUCC = '$value'";
        
        $res=mysqli_query($connection, $sql);
        
        while($rows=mysqli_fetch_array($res)){
            
            $usuario=$rows[0];
        
        }
        
        $sql = 'INSERT INTO  ue_usuarios (id_usuario, id_uexperimental, acceso) VALUES ("'.$usuario.'","'.$ex.'","'.$estado.'")';
        
        mysqli_query($connection, $sql);}

}
?>

<script>

obtenerUex();

</script>