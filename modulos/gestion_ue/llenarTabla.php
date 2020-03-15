<?php

if(isset($_REQUEST['funcion'])){

    $funcion = $_REQUEST['funcion'];

    //$funcion();
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "sei";
    
    $connection = mysqli_connect($host,$user,$pass,$db);
    
    mysqli_set_charset($connection, "utf8");

    $codigo =  $_REQUEST['codigo'];

    $consultar = "SELECT codigoUCC,nombres FROM usuarios WHERE codigoUCC = $codigo";

    $result = mysqli_query($connection,$consultar) or die('error en consulta'.mysqli_error($connection));

     
    $table = array();
    $i=0;

    while ($fila = mysqli_fetch_row($result)) {
       $table[$i]=$fila;
       $i++;
    }
    if(count($table) == 0) {
        exit('false');
    }

      echo json_encode($table);
    
}

/* public function getEstudiantes(){
   
} 
 */
?>