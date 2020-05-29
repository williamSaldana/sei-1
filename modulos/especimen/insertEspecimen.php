<?php

include("conexion/connection.php");

$codigo = $_POST['codigo'];
$peso = $_POST['peso'];
$fNacimiento = $_POST['fNacimiento'];
$uExperimental = $_POST['uExperimental'];
$estado = $_POST['estado'];

$sql = "SELECT u_experimentales.id_uexperimental FROM u_experimentales WHERE u_experimentales.nombre = '$uExperimental'";

$resultado = mysqli_query($connection, $sql);

$fila = mysqli_fetch_row($resultado);

$sql = 'INSERT INTO  especimenes (codigo, peso, f_nacimiento, id_uexperimental, status_especimen) 
VALUES ("'.$codigo.'","'.$peso.'","'.$fNacimiento.'","'.$fila[0].'","'.$estado.'")';
echo $sql;        
       
        if(mysqli_query($connection, $sql)){ ?>

            <script type="text/javascript">
            alert("Especimen insertado correctamente");
            window.location.href = "?page=gestion_ue/listarUe";
            </script>
        
        <?php 
        } else{ 
        ?>    
            <script type="text/javascript">
            alert("No se pudo realizar el registro");
            window.location.href = "?page=gestion_ue/listarUe";
            </script>
        <?php
        }

?>