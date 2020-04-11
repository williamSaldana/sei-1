<?php
require("conexion/connection.php");
require("consultaTratamientos.php");
?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-format-list-bulleted"></i>
                    </span>
                    &nbsp; Modulo Tratamientos
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
                                <input class="input is-hovered" type="text" id="txtTratamiento" placeholder="Buscar..." onkeyup="busquedaTratamiento();" >
                                <span class="icon is-small is-right">
                                    <i class="zmdi zmdi-format-list-bulleted"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4 has-text-centered">
                <a class="button is-primary is-hovered" href="?page=tratamientos/registroTratamiento">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-format-list-bulleted"></i>
                    </span>
                    <span>Agregar Tratamiento</span>
                </a>
            </div>
        </div>

        <div id="datosT"></div>
    </div>
</section>
