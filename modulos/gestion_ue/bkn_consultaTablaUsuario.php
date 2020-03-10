<?php

require("conexion/connection.php");

$consultar = "SELECT codigoUCC,nombres FROM `usuarios` WHERE codigoUCC=414998";
$query = mysqli_query($connection,$consultar);
$array = mysqli_fetch_array($query);

?>