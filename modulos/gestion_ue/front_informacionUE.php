<?php
    require ("conexion/connection.php");    
    require ("informacionUE.php");
    require ("listaNotas.php");
    $mysqli = new mysqli('localhost', 'root', '', 'sei');
    $nombre = $infoExperimental[0];

    
?>
<script>
// Almacena la información en sessionStorage
sessionStorage.setItem('ventana', 'especimen');
</script>

<script src="recursos/js/modal.js"></script>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    &nbsp; Informacion Unidad Experimental
                </h4>
            </div>

            <div class="field is-grouped" style="margin-top: 10px;">



                <div class="column is-4 has-text-centered">
                    <a class="button is-primary is-hovered" id="showModal">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-account-add"></i>
                        </span>
                        <span>Agregar Nota</span>
                    </a>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="column is-4 has-text-centered">
                    <a class="button is-primary is-hovered" href="?page=especimen/agregarEspecimen&uex=<?php echo $nombre ?> ">
                        <span class="icon is-small">
                            <i class="zmdi zmdi-account-add"></i>
                        </span>
                        <span>Agregar Especimen</span>
                    </a>
                </div>

            </div>
        </div>
        <hr size="2px" color="black" />
        <?php
        echo("<strong>Nombre: </strong>&nbsp;".$nombre."<br>");
echo ("<strong>Creacion: </strong>&nbsp;".$infoExperimental[1]."<br>");
echo("<strong>Asistentes: </strong>&nbsp;"."<br><br>");

foreach ($asistentes[0] as $key =>$value) {
  echo("→".$value."<br>");
}

       ?>

        <hr size="2px" color="black" />

        <div class="columns">
            <div class="column is-12">
                <div class="table-container">
                    <table class="table is-hoverable is-fullwidth">
                        <thead>
                            <tr>
                                <th class="has-text-centered">Código</th>
                                <th class="has-text-centered">Peso</th>
                                <th class="has-text-centered">fecha nacimiento</th>
                                <th class="has-text-centered">estado</th>
                                <th class="has-text-centered">Operaciones</th>
                                <th class="has-text-centered">Indicadores</th>
                            </tr>
                        </thead>
                        <tbody id="datos">
                            <?php
                                    foreach ($especimenes[0] as $row) {?>
                            <tr data-idUser="<?php echo $row['codigo']?>">
                                <td class="has-text-centered">
                                    <?php echo $row['codigo'];?>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row['peso'];?>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row['f_nacimiento'];?>
                                </td>

                                <td class="has-text-centered">
                                    <?php echo $row['status_especimen'];?>
                                </td>

                                <td>
                                    <div class="buttons has-addons is-centered">
                                        <a class="button is-success is-active is-small"
                                            href='?page=especimen/Front_actualizarEspecimen&codigo=<?php echo $row['codigo'];?>'>
                                            <span class="icon is-small">
                                                <i class="zmdi zmdi-edit"></i>
                                            </span>
                                        </a>

                                        <a class="button is-danger is-active is-small"
                                            href='?page=especimen/eliminarEspecimen&codigo=<?php echo $row['codigo'];?>'>
                                            <span class="icon is-small">
                                                <i class="zmdi zmdi-close"></i>
                                            </span>
                                        </a>

                                        <div class="field-body"></div>
                                </td>

                                <td>

                                    <a class="button is-link is-active is-small"
                                        href='?page=ind_bienestar/indBienestar&experimental=<?php echo $infoExperimental[0];?>&unidadExp=<?php echo $row['codigo'];?>'>
                                        <span class="icon is-small">
                                            <i class="zmdi zmdi-assignment-o"></i>
                                        </span>
                                        <span>Bienestar</span>
                                    </a>


                                    <a class="button is-link is-active is-small"
                                        href='?page=ind_calidadh/indCalidad&experimental=<?php echo $infoExperimental[0];?>&unidadExp=<?php echo $row['codigo'];?>'>
                                        <span class="icon is-small">
                                            <i class="zmdi zmdi-assignment-o"></i>
                                        </span>
                                        <span>Calidad Huevo</span>
                                    </a>

                                    <a class="button is-link is-active is-small"
                                        href='?page=ind_productividad/indProductividad&experimental=<?php echo $infoExperimental[0];?>&unidadExp=<?php echo $row['codigo'];?>'>
                                        <span class="icon is-small">
                                            <i class="zmdi zmdi-assignment-o"></i>
                                        </span>
                                        <span>Productividad</span>
                                    </a>

                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">

        <header class="modal-card-head is-radiusless">
            <p class="modal-card-title">Seleccione asistente</p>
            <button class="delete" aria-label="close" id="cerrar"></button>
        </header>

        <section class="modal-card-body">

            <form action="?page=gestion_ue/bkn_nota" method="post">

                <table>

                    <tr>
                        <td>
                            <label class="label">Nota&emsp;&emsp;&emsp;</label>
                        </td>
                        <td>
                            <textarea placeholder="Escribe aquí el texto..." id="nota" name="nota" cols="40"
                                rows="10"></textarea>
                            <div class="field">

                                <div class="control has-icons-right">
                                    <input class="input is-hovered" type="hidden" name="experimental" id="experimental"
                                        value="<?php echo $nombre ?>">

                                </div>
                            </div>
                        </td>
                        &nbsp;
                        <td>
                            <div class="control">
                                <button class="button is-primary is-active">
                                    <span class="icon is-small">
                                        <i class="zmdi zmdi-accounts-add"></i>
                                    </span>
                                    <span>Aceptar</span>
                                </button>
                            </div>

                        </td>

                    </tr>

                </table>

                <table class="table is-hoverable is-fullwidth">
                        <thead>
                            <tr>
                                <th class="has-text-centered">Fecha</th>
                                <th class="has-text-centered">Comentarios</th>
                                <th class="has-text-centered">Usuario</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php
                                    foreach ($notas[0] as $row) {?>
                            <tr data-idUser="<?php echo $row['codigo']?>">
                                <td class="has-text-centered">
                                    <?php echo $row['fecha'];?>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row['comentarios'];?>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row['id_usuario'];?>
                                </td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

            </form>

        </section>
    </div>
</div>