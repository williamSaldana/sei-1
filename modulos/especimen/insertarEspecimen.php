<?php

if(isset($_GET['funcion'])){
    
    $funcion = $_GET['funcion'];
    $funcion();
  
  }

  //terminar insertar especimen
  
  function ejecutar(){

    $arreglo = json_decode($_GET['array']);

    $arreglo = (array) $arreglo;

    $uExperimental = $_GET['nombre'];

    experimental($uExperimental,$arreglo);

  }

function experimental($exp,$array){

    include("../../conexion/connection.php");
  
    $sql = "SELECT id_uexperimental FROM u_experimentales WHERE nombre = '$exp'";

    $res=mysqli_query($connection, $sql);

    while($rows=mysqli_fetch_array($res)){
        
        $ex=$rows[0];
    
    }
        
    insertarEspecimen($ex,$estado,$array);        
    //arreglar especimen adjuntar en el arreglo
}

function insertarEspecimen($aUExperimental,$aestado,$arreglo){
    
    include("../../conexion/connection.php");

    foreach ($arreglo as $value) {
        
        $sql = 'INSERT INTO  especimenes (codigo, peso, f_nacimiento, id_uexperimental, status_especimen) VALUES ("'.$value[0].'","'.$value[1].'","'.$value[2].'","'.$aUExperimental.'","'.$value[3].'")';
        
        if(mysqli_query($connection, $sql)){
            
            echo("Registro insertado exitosamente");
        
        } else{ 
            
            echo("No se puedo realizar el registro");
        
        }
    
    }
    
}

?>