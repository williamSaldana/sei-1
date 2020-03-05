<?php

$codigo = $_POST["codigo"];
$peso = $_POST["peso"];
$fNacimiento = $_POST["fNacimiento"];
$uExperimental = $_POST["uExperimental"];
$estado = $_POST["estado"];

insertarEspecimen($codigo,$peso,$fNacimiento,$uExperimental,$estado);

function insertarEspecimen($acodigo,$apeso,$aNacimiento,$aUExperimental,$aestado){
    
    include("conexion/connection.php");
    
    $sql = 'INSERT INTO  especimenes (codigo, peso, f_nacimiento, id_uexperimental, status_especimen) VALUES ("'.$acodigo.'","'.$apeso.'","'.$aNacimiento.'","'.$aUExperimental.'","'.$aestado.'")';
    //exit("prueba: ".$sql);
    
    if(mysqli_query($connection, $sql)){
        echo '<script type="text/javascript">
        alert("Registro insertado exitosamente");
        window.location.href="?page=especimen/registroEspecimen";
    </script>';
    
} else{ 
    echo '<script type="text/javascript">
        alert("No se puedo realizar el registro");
        window.location.href="?page=especimen/registroEspecimen";
    </script>';
    }
}
?>