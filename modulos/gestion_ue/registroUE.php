<?php
  $mysqli = new mysqli('localhost', 'root', '', 'sei');
  require("conexion/connection.php");
?>



<section class="section">
    <div class="container">
        <form action="?page=gestion_ue/insertarUE" id="form1" method="POST">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h4 class="title is-4 has-text-grey-dark">Registro unidades experimentales</h4>
                    
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" required name="nombre" id="nombre" required>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-accounts-list"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Asignar asistente (codigo Ucc)</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="number" name="asistente" id="asistente">
                            
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column is-12">
                            <div class="table-container">
                                <table class="table is-hoverable is-fullwidth">
                                    <thead>
                                        <tr>
                                            <th class="has-text-centered">Codigo</th>
                                            <th class="has-text-centered">Nombre</th>
                                        </tr>
                                    </thead>
                                    <tbody id="datos">
                                        <?php

                            $consultar = "SELECT codigoUCC,nombres FROM usuarios WHERE codigoUCC=414998";
                            $query = mysqli_query($connection,$consultar);
                            $array = mysqli_fetch_array($query);

                                    foreach ($query as $row) {?>

                                        <td class="has-text-centered">
                                            <?php echo $row['codigoUCC'];?>
                                        </td>
                                        <td class="has-text-centered">
                                            <?php echo $row['nombres'];?>
                                        </td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Estado</label>
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
                                <span>Crear unidad experimental</span>
                            </button>
                        </div>

                        <div class="control">
                            <a class="button is-primary is-active" href="?page=gestion_ue/listarUe">
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

        <form action="?page=gestion_ue/insertarUE" id="form1" method="POST">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    
                    <div class="field">
                        <label class="label">Asignar asistente (codigo Ucc)</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="number" name="asistente" id="asistente">
                            
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column is-12">
                            <div class="table-container">
                                <table class="table is-hoverable is-fullwidth">
                                    <thead>
                                        <tr>
                                            <th class="has-text-centered">Codigo</th>
                                            <th class="has-text-centered">Nombre</th>
                                        </tr>
                                    </thead>
                                    <tbody id="datos">
                                        <?php

                            $consultar = "SELECT codigoUCC,nombres FROM usuarios WHERE codigoUCC=414998";
                            $query = mysqli_query($connection,$consultar);
                            $array = mysqli_fetch_array($query);

                                    foreach ($query as $row) {?>

                                        <td class="has-text-centered">
                                            <?php echo $row['codigoUCC'];?>
                                        </td>
                                        <td class="has-text-centered">
                                            <?php echo $row['nombres'];?>
                                        </td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                    <div class="field is-grouped" style="margin-top: 30px;">
                        <div class="control">
                            <button class="button is-primary is-active">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-accounts-add"></i>
                                </span>
                                <span>Crear unidad experimental</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
            </div>
        </form>
    </div>
</section>