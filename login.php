<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="recursos/icon/favicon.ico">
    <title>Sistema Evaluación Indicadores</title>
    <link rel="stylesheet" type="text/css" href="recursos/bulma-start/css/main.css">
    <link rel="stylesheet" type="text/css" href="recursos/icon/css/material-design-iconic-font.min.css">
</head>

<body>

    <?php include ("includes/header.php"); ?>

    <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head is-radiusless">
                <p class="modal-card-title">Registro</p>
                <button class="delete" aria-label="close"></button>
            </header>
            <form action="modulos/usuarios/ValidarUsuario.php" method="POST" name="form2" id="form2">
                <section class="modal-card-body">
                    <p class="has-text-left" style="margin-bottom: 10px;">
                        Confirme que su usuario no haya sido creado.
                    </p>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Código Ucc</label>
                        </div>
                        <div class="field-body">
                            <div class="field is-grouped">
                                <p class="control is-expanded has-icons-right">
                                    <input class="input is-hovered" type="number" name="codigoUCC" id="codigoUCC"
                                        required>
                                    <span class="icon is-small is-right">
                                        <i class="zmdi zmdi-account-circle"></i>
                                    </span>
                                </p>
                                <p class="control">
                                    <button class="button is-primary is-active">
                                        <span class="icon">
                                            <i class="zmdi zmdi-zoom-in"></i>
                                        </span>
                                        <span>Validar</span>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-4 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4 has-text-centered">
                    <figure class="image is-128x128 is-inline-block">
                        <img src="recursos/img/logo-ucc.png">
                    </figure>
                    <form action="" method="POST">
                        <?php if(isset($errorLogin)){
                            echo "<article class='message is-danger is-small' id='mensaje'>
                                    <div class='message-header'>
                                        <p>Error al ingresar</p>
                                        <button class='delete' aria-label='delete' id='cerrarmsg'></button>
                                    </div>
                                    <div class='message-body'>
                                      $errorLogin
                                    </div>    
                                </article>";} ?>
                        <div class="field">
                            <label class="label has-text-left">Usuario</label>
                            <div class="control has-icons-right">
                                <input class="input is-hovered" type="text" name="username" required>
                                <span class="icon is-small is-right">
                                    <i class="zmdi zmdi-account"></i>
                                </span>
                            </div>
                            <p class="help has-text-left">Ingrese su código Ucc</p>
                        </div>

                        <div class="field">
                            <label class="label has-text-left">Contraseña</label>
                            <div class="control has-icons-right">
                                <input class="input is-hovered" type="password" name="password" required>
                                <span class="icon is-small is-right">
                                    <i class="zmdi zmdi-lock"></i>
                                </span>
                            </div>
                            <p class="help has-text-left">Ingrese su contraseña</p>
                        </div>

                        <a href="modulos/recordatorio_clave/recordatorio.php" class="has-text-grey-dark">
                            ¿Olvido su contraseña?
                        </a>

                        <div class="field">
                            <p class="control" style="margin-top: 10px;">
                                <button class="button is-fullwidth is-primary is-active" type="submit">
                                    Ingresar
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="column is-4 is-hidden-mobile">&nbsp;</div>
            </div>
        </div>
    </section>

    <?php include ("includes/footer.php"); ?>

    <script src="recursos/js/jquery.min.js"></script>
    <script src="recursos/js/navbar.js"></script>
    <script src="recursos/js/modal.js"></script>
    <script src="recursos/js/mensaje.js"></script>
</body>

</html>