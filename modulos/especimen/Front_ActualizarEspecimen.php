<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
 
  $num = $_GET['codigo'];
  //exit("prueba".$num);
  

  $consulta=ConsultarEspecimen($num);

  function ConsultarEspecimen($a){
    include "conexion/connection.php";
    $sentencia="SELECT * FROM especimenes WHERE codigo='".$a."' ";
    
    $resultado=mysqli_query($connection,$sentencia);
    $filas=mysqli_fetch_assoc($resultado);
    return [
      $filas['codigo'],
      $filas['peso'],
      $filas['f_nacimiento'],
      $filas['id_uexperimental'],
      $filas['status_especimen']
    ];

  }

?>
    <form action="modulos/especimen/bkn_ActualizarEspecimen.php?dato=<?php echo $consulta[0]?>" method="POST">

        <label>Codigo:</label>
        <input type="text" id="codigo" name="codigo" ; value="<?php echo $consulta[0]?>">
        <br>
        <label>Peso:</label>
        <input type="number" id="peso" name="peso" ; value="<?php echo $consulta[1]?>">
        <br>
        <label>Fecha nacimiento:</label>
        <input type="date" id="fNacimiento" name="fNacimiento" ; value="<?php echo $consulta[2]?>"></input>
        <br>
        <label>Unidad experimental:</label>
        <input type="number" id="uExperimental" name="uExperimental" ; value="<?php echo $consulta[3]?>"></input>
        <br>
        <label>Estado:</label>
        <input type="number" id="estado" name="estado" ; value="<?php echo $consulta[4]?>"></input>
        <br>
        <li class="button">
            <button type="submit">Actualizar</button>
        </li>
    </form>
</body>

</html>