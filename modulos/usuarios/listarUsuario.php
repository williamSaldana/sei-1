<?php
    require ("conexion/connection.php");    
    require ("consultarUsuario.php");
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
                <a class="button is-primary is-hovered" href="?page=usuarios/nuevoUsuario">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-account-add"></i>
                    </span>
                    <span>Agregar usuario</span>
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
                                <th class="has-text-centered">Usuario</th>
                                <th class="has-text-centered">Teléfono</th>
                                <th class="has-text-centered">E-mail</th>
                                <th class="has-text-centered">Rol</th>
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
