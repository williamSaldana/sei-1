<?php
  $mysqli = new mysqli('localhost', 'root', '', 'sei');
?>



<section class="section">
    <div class="container">
        <form action="?page=especimen/insertarEspecimen" id="form1" method="POST">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h4 class="title is-4 has-text-grey-dark">Registro especimenes</h4>
                    <div class="field">
                        <label class="label">Codigo</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="codigo" id="codigo">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-accounts-list"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Peso</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="number" name="peso" id="peso">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Fecha nacimiento</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="date" name="fNacimiento" id="fNacimiento">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Unidad experimental</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="number" name="uExperimental" id="uExperimental">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
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
                                <span>Crear especimen</span>
                            </button>
                        </div>

                        <div class="control">
                            <a class="button is-primary is-active" href="?page=especimen/listarEspecimen">
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