<?php

$nombre = $_POST["nombre"];
$estado = $_POST["estado"];

//exit("prueba: ".$nombre." ".$creacion." "."$estado");

insertarUE($nombre,$estado);

function insertarUE($anombre,$aestado){
    
    include("conexion/connection.php");
    
    $sql = 'INSERT INTO  u_experimentales (nombre, creacion, status_uexperimental) VALUES ("'.$anombre.'","'.date("Y-m-d").'","'.$aestado.'")';
    //exit("prueba: ".$sql);
    
    if(mysqli_query($connection, $sql)){?>
        
        <script type="text/javascript">
        
        alert("Unidad experimental registrada");
	window.location.href="?page=gestion_ue/registroUE";
        
    
        </script>
    <?php
} else{ ?>
    <script type="text/javascript">
        
        alert("NO se pudo realizar el registro");
	window.location.href="?page=gestion_ue/listarUe";
    
        </script>
        <?php
            }
    }

?>