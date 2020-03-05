<?php
  $mysqli = new mysqli('localhost', 'root', '', 'sei');
?>



<section class="section">
    <div class="container">
        <form action="?page=usuarios/insertarUsuario" id="form1" method="POST">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h4 class="title is-4 has-text-grey-dark">Registro de usuarios</h4>
                    <div class="field">
                        <label class="label">Código Ucc</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="number" required name="codigoUcc" id="codigoUcc" required>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-accounts-list"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Nombres</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" required name="nombres" id="nombres">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Primer apellido</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" required name="primerApellido" id="primerApellido">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-item-1"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Segundo apellido</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" required name="segundoApellido" id="segundoApellido">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-item-2"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Género</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="genero" id="genero" required>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Telefono</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" required name="telefono" id="telefono">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-account-box-phone"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="column is-2 is-hidden-mobile">&nbsp;</div>

                <div class="column is-4">
                    <div class="field">
                        <label class="label">E-mail</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="email" required name="email" id="email">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Permiso acceso</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="rol" id="rol" required>
                                    <?php
                                            $query = $mysqli -> query ("SELECT * FROM roles");
                                            while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores[id_rol].'">'.$valores[nombre_rol].'</option>';
                                        } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h4 class="title is-4 has-text-grey-dark" style="margin-top: 40px;">
                        Credenciales de acceso
                    </h4>
                    <p class="has-text-left" style="margin-bottom: 10px;">
                        Tenga en cuenta que la contraseña debe tener entre 7 y 10 caracteres
                    </p>

                    <div class="field">
                        <label class="label">Contraseña</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="password" required id="contrasenna" name="contrasenna">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-key"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Verificar</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="password" required id="verificar" name="verificar">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-key"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Status</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="estado" id="estado">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field is-grouped" style="margin-top: 30px;">
                        <div class="control">
                            <button class="button is-primary is-active">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-accounts-add"></i>
                                </span>
                                <span>Crear cuenta</span>
                            </button>
                        </div>

                        <div class="control">
                            <a class="button is-primary is-active" href="?page=usuarios/listarUsuario">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-close"></i>
                                </span>
                                <span>Cancelar</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
            </div>
        </form>
    </div>
</section>
