<?php
    require ("conexion/connection.php"); 
    require ("consultaListaUe.php");
?>
<script>
// Almacena la información en sessionStorage
sessionStorage.setItem('ventana', 'unidadExperimental');

</script>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-folder"></i>
                    </span>
                    &nbsp; Modulo Gestión UE
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
                                <input class="input is-hovered" type="text" id="txtUnidadExperimantal" placeholder="Buscar..." onkeyup="busquedaGestionUe();">
                                <span class="icon is-small is-right">
                                    <i class="zmdi zmdi-folder"></i>
                                </span>
                            </p>
                        </div>
                        <p class="control has-text-centered is-hidden-desktop">
                            <a class="button is-hovered" href="?page=QRcode/qrcode">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-apps"></i>
                                </span>
                                <span>Escanear</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="column is-4 has-text-centered">
                <a class="button is-primary is-hovered" href="?page=gestion_ue/registroUE">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-folder"></i>
                    </span>
                    <span>Agregar UE</span>
                </a>
            </div>
        </div>

        <div id="datosUE"></div>
    </div>
</section>
