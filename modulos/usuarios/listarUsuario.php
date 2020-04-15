<?php
    require ("conexion/connection.php");  
    $mysqli = new mysqli('localhost', 'root', '', 'sei');
    
?>

<script>
    // Almacena la información en sessionStorage
    sessionStorage.setItem('ventana', 'usuario');
    
    </script>


<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    &nbsp; Modulo Usuarios
                </h4>
            </div>
            <div class="column is-4 has-text-centered">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Buscar:</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-grouped">
                            <p class="control is-expanded has-icons-right">
                                <input class="input is-hovered" type="text" id="txtListUsuario" placeholder="Buscar..." onkeyup="busquedaUsuario();">
                                <span class="icon is-small is-right">
                                    <i class="zmdi zmdi-account-circle"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4 has-text-centered">
                <a class="button is-primary is-hovered" href="?page=prueba/pruebaphp">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-account-add"></i>
                    </span>
                    <span>Agregar usuario</span>
                </a>
            </div>
        </div>

        <div id="datosU"></div>
    </div>
</section>
<script src="recursos/js/peticion.js"></script>