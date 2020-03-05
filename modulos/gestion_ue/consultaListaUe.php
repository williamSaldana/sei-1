<?php

require("conexion/connection.php");

$consultar = "SELECT usuarios.codigoUCC, CONCAT(usuarios.nombres,' ',usuarios.primer_apellido) AS 'Nombres y Apellidos',
usuarios.telefono,
usuarios.email,
roles.nombre_rol,
IF(usuarios.status_usuario = '1', 'Activo', 'Inactivo')
FROM
usuarios
INNER JOIN roles ON usuarios.id_rol = roles.id_rol
ORDER BY
usuarios.codigoUCC ASC";
$query = mysqli_query($connection,$consultar);
$array = mysqli_fetch_array($query);

?>