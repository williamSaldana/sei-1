<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 
  $num = $_GET['nombre'];
  //exit("prueba".$num);
  

  $consulta=ConsultarUE($num);

  function ConsultarUE($a){
    include "conexion/connection.php";
    $sentencia="SELECT * FROM u_experimentales WHERE nombre='".$a."' ";
    
    $resultado=mysqli_query($connection,$sentencia);
    $filas=mysqli_fetch_assoc($resultado);
    return [
      $filas['nombre'],
      $filas['creacion'],
	  $filas['status_uexperimental']
    ];

  }

?>
<form action="?page=gestion_ue/actualizarUE2" method="POST">

    <label>Nombre:</label>
    <input type="text" id="nombre" name="nombre" ; value="<?php echo $consulta[0]?>">
    <br>
    <label>Creacion:</label>
    <input type="date" id="creacion" name="creacion"; value="<?php echo $consulta[1]?>">
    <br>
    <label>Estado:</label>
    <select name="estado" id="estado">
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
      </select>
    <br>
    <li class="button">
  <button type="submit">Actualizar</button>
</li>
</form>
</body>
</html>