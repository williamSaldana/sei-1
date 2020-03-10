<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="recursos/icon/favicon.ico">
    <title>Sei | Panel de administración</title>
    <link rel="stylesheet" type="text/css" href="recursos/bulma-start/css/main.css">
    <link rel="stylesheet" type="text/css" href="recursos/icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="recursos/bordes.css">
</head>


<body>

    <?php $pagina = isset($_GET['page'])? strtolower($_GET['page']) : 'inicio/vista' ?>

    <?php require_once ("menu.php"); ?>
    <?php require_once ("modulos/" . $pagina . ".php"); ?>

    <?php include ("includes/footer.php"); ?>

    <script src="recursos/js/jquery.min.js"></script>
    <script src="recursos/js/navbar.js"></script>
    <script src="recursos/js/dropdown.js"></script>

</body>

</html>
