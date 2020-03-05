<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="?page=especimen/insertarEspecimen" method="POST">

    <label>Codigo:</label>
    <input type="text" id="codigo" name="codigo">
    <br>
    <label>Peso:</label>
    <input type="number" id="peso" name="peso">
    <br>
    <label>Fecha nacimiento:</label>
    <input type="date" id="fNacimiento" name="fNacimiento"></input>
    <br>
    <label>Unidad experimental:</label>
    <input type="number" id="uExperimental" name="uExperimental"></input>
    <br>
    <label>Estado:</label>
    <input type="number" id="estado" name="estado"></input>
    <br>
    <li class="button">
  <button type="submit">Agregar</button>
</li>
</form>
</body>
</html>