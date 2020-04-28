
<?php

$unidadExperimental = $_GET['nombre'];

$infoExperimental = consultaExperimental($unidadExperimental);
$idExperimental = consultaId($unidadExperimental);
$asistentes = consultaAsistente($idExperimental[0]);
$especimenes = consultaEspecimenes($idExperimental[0]);



function consultaEspecimenes($codigo){

  require("conexion/connection.php");

  $consultar = "SELECT * FROM especimenes
  where `id_uexperimental` = $codigo";
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

function consultaExperimental($nombre){

    include "conexion/connection.php";
    $sql="SELECT * FROM u_experimentales WHERE nombre='".$nombre."' ";
    
    $resultado=mysqli_query($connection,$sql)or die('error en consulta'.mysqli_error($connection));
    $filas=mysqli_fetch_assoc($resultado);
    return [
      $filas['nombre'],
      $filas['creacion']
    ];

}

function consultaId($nombre){

    include("conexion/connection.php");

    $sql="SELECT u_experimentales.id_uexperimental FROM u_experimentales WHERE u_experimentales.nombre='$nombre' ";

    $resultado=mysqli_query($connection,$sql)or die('error en consulta'.mysqli_error($connection));
    $filas=mysqli_fetch_assoc($resultado);
    return [
        $filas['id_uexperimental']
      ];
}

function consultaAsistente($codigo){

  include("conexion/connection.php");

  $sql="SELECT
  CONCAT(usuarios.nombres,' ',usuarios.primer_apellido,' ',usuarios.segundo_apellido) AS 'Nombres'
  FROM
  usuarios
  INNER JOIN ue_usuarios ON ue_usuarios.id_usuario = usuarios.id_usuario
  INNER JOIN u_experimentales ON ue_usuarios.id_uexperimental = u_experimentales.id_uexperimental
  WHERE
  u_experimentales.id_uexperimental = $codigo";

  $resultado=mysqli_query($connection,$sql) or die('error en consulta'.mysqli_error($connection));

  $arreglo=array();
    $i=0;
    while($row = mysqli_fetch_assoc($resultado)) {

      array_push($arreglo,$row['Nombres']);
      
    } // fin del bucle de instrucciones
    
    return [
      $arreglo
    ]; 
    
}


?>   

