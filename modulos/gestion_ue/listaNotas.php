<?php

$unidadExperimental = $_GET['nombre'];


$Experimental = Id($unidadExperimental);
$notas = consultaNota($Experimental[0]);
/* $comentario = consultaNota(); */

function consultaNota($codigo){

    require("conexion/connection.php");
  
    $consultar = "SELECT `fecha`,`comentarios`,`id_usuario` 
    FROM `notas` 
    WHERE `id_uexperimental`= '$codigo'";
    $query = mysqli_query($connection,$consultar);
  
  
    $arreglo=array();
  
    $i=0;
    
    while($row = mysqli_fetch_assoc($query)) {
      $i++;
      array_push($arreglo,$row);
      
    } 
    
    return [
      $arreglo
    ]; 
  
  }

  function Id($nombre){

    include("conexion/connection.php");

    $sql="SELECT u_experimentales.id_uexperimental FROM u_experimentales WHERE u_experimentales.nombre='$nombre' ";

    $resultado=mysqli_query($connection,$sql)or die('error en consulta'.mysqli_error($connection));
    $filas=mysqli_fetch_assoc($resultado);
    return [
        $filas['id_uexperimental']
      ];
}

?>