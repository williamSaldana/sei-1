<?php

if(isset($_GET['funcion'])){
  
  $funcion = $_GET['funcion'];
  
  $funcion();

}

function ejecutar(){
  
  $arreglo = array();

  $arreglo = $_GET['array'];

  $arreglo = (array) $arreglo;

  $arreglo = explode(",",$arreglo[0]);
    
  agregaTratamiento($arreglo);

}

function agregaTratamiento($dato){
    
  include("../../conexion/connection.php");
        
  $nombre = $_GET['nombre'];
  
  $sqlUexp="SELECT u_experimentales.id_uexperimental FROM u_experimentales WHERE u_experimentales.nombre='$nombre'";

  $resultadoUExp = mysqli_query($connection, $sqlUexp); 
    
  $filaUexp = mysqli_fetch_row($resultadoUExp);

  foreach ($dato as $value) {
      
    $sql = "SELECT tratamientos.id_tratamiento from tratamientos WHERE tratamientos.nombre = '$value'";
      
    $resultadoTrata = mysqli_query($connection, $sql); 
    
    $fila = mysqli_fetch_row($resultadoTrata);
      
    $sql = "INSERT INTO `ue_tratamientos` (`id_uexperimental`, `id_tratamiento`) VALUES ('$filaUexp[0]', '$fila[0]')";
      echo $sql;
    $resultado = mysqli_query($connection, $sql);
      
    if ($resultado) {
      
      echo("Tratamiento agregado");
      
    }else {
        
      echo("NO se pudo agregar tratamiento ");
      
    }
    
  }
  
}


?>