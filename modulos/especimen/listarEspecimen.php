<?php
    require ("conexion/connection.php");    
    require ("consultarEspecimen.php");
    $mysqli = new mysqli('localhost', 'root', '', 'sei');
?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    &nbsp; Modulo Especimenes
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
                                <input class="input is-hovered" type="text" required>
                                <span class="icon is-small is-right">
                                    <i class="zmdi zmdi-account-circle"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4 has-text-centered">
                <a class="button is-primary is-hovered" href="?page=especimen/registroEspecimen">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-account-add"></i>
                    </span>
                    <span>Agregar especimen</span>
                </a>
            </div>
        </div>

        <div class="columns">
            <div class="column is-12">
                <div class="table-container">
                    <table class="table is-hoverable is-fullwidth">
                        <thead>
                            <tr>
                                <th class="has-text-centered">Código</th>
                                <th class="has-text-centered">Peso</th>
                                <th class="has-text-centered">fecha nacimiento</th>
                                <th class="has-text-centered">unidad experimental</th>
                                <th class="has-text-centered">estado</th>
                                <th class="has-text-centered">Operaciones</th>
                            </tr>
                        </thead>
                        <tbody id="datos">
                            <?php
                                    foreach ($query as $row) {?>
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
                                    <?php echo $row['id_uexperimental'];?>
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
                                    </div>
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