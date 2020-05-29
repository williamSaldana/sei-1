<?php

include "conexion/connection.php";

$sql="SELECT tratamientos.nombre FROM `tratamientos`";

$resultado=mysqli_query($connection,$sql);


?>