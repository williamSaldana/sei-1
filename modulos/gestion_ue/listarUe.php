<?php
    require ("conexion/connection.php"); 
    require ("consultarUsuario.php");
?>

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
                                <input class="input is-hovered" type="text" required>
                                <span class="icon is-small is-right">
                                    <i class="zmdi zmdi-folder"></i>
                                </span>
                            </p>
                        </div>
                        <p class="control has-text-centered is-hidden-desktop">
                            <a class="button is-hovered">
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
                <a class="button is-primary is-hovered" href="?page=tratamientos/registroTratamiento">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-folder"></i>
                    </span>
                    <span>Agregar UE</span>
                </a>
            </div>
        </div>

        <div class="columns">
            <div class="column is-12">
                <div class="table-container">
                    <table class="table is-hoverable is-fullwidth">
                        <thead>
                            <tr>
                                <th class="has-text-centered">Nombre</th>
                                <th class="has-text-centered">Nº_especimenes</th>
                                <th class="has-text-centered">Creación</th>
                                <th class="has-text-centered">Status</th>
                                <th class="has-text-centered">Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="datos">
                            <?php
                                    foreach ($query as $row) {?>
                            <tr data-idUser="<?php echo $row['codigoUCC']?>">
                                <td class="has-text-centered">
                                    <a href='?page=usuarios/informacionUsuario&codigo=<?php echo $row['codigoUCC'];?>'>
                                        <?php echo $row['codigoUCC'];?>
                                    </a>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row['Nombres y Apellidos'];?>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row['telefono'];?>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row['email'];?>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row['nombre_rol'];?>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row["IF(usuarios.status_usuario = '1', 'Activo', 'Inactivo')"];?>
                                </td>


                                <td>
                                    <div class="buttons has-addons is-centered">
                                        <a class="button is-success is-active is-small" href='?page=usuarios/actualizarUsuario&codigo=<?php echo $row['codigoUCC'];?>'>
                                            <span class="icon is-small">
                                                <i class="zmdi zmdi-edit"></i>
                                            </span>
                                        </a>

                                        <a class="button is-danger is-active is-small" href='?page=usuarios/eliminarUsuario&codigo=<?php echo $row['codigoUCC'];?>'>
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
