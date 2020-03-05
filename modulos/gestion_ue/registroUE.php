<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="?page=gestion_ue/insertarUE" method="POST">

    <label>Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <label>Creacion:</label>
    <input type="date" id="creacion" name="creacion">
    <br>
    <label>Estado:</label>
    <input id="estado" name="estado"></input>
    <br>
    <li class="button">
  <button type="submit">Agregar</button>
</li>
</form>
</body>
</html>