<?php

require("conexion/connection.php");

$consultar = "SELECT * FROM especimenes";
$query = mysqli_query($connection,$consultar);
$array = mysqli_fetch_array($query);

?>