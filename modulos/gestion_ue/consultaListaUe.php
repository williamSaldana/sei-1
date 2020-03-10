<?php

require("conexion/connection.php");

$consultar = "SELECT
u_experimentales.nombre,
count(especimenes.codigo) as 'Nº especimenes',
u_experimentales.creacion,
u_experimentales.status_uexperimental
FROM
u_experimentales
INNER JOIN especimenes ON especimenes.id_uexperimental = u_experimentales.id_uexperimental
INNER JOIN ue_usuarios ON ue_usuarios.id_uexperimental = u_experimentales.id_uexperimental
INNER JOIN usuarios ON ue_usuarios.id_usuario = usuarios.id_usuario
WHERE
usuarios.codigoUCC =".$_SESSION['sesion']."
GROUP BY
especimenes.id_uexperimental
ORDER BY
u_experimentales.creacion ASC";
$query = mysqli_query($connection,$consultar);
$array = mysqli_fetch_array($query);

?>