<?php
    require("conexion/connection.php");
    $uExperimental = $_GET['experimental'];
    $especimen = $_GET['unidadExp'];
?>


<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-archive"></i>
                    </span>
                    &nbsp; Indicadores de productividad
                </h4>
            </div>

            <div class="column is-4 is-hidden-mobile">&nbsp;</div>

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
                                    <i class="zmdi zmdi-search"></i>
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
        </div>

        <br>

        <div class="columns">
            <div class="column is-4 has-text-centered">
                <p style="margin-top: 5px;">
                    <strong>U. Experimental: <?php echo $uExperimental ?></strong>
                </p>
            </div>

            <div class="column is-4 has-text-centered">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Espécimen: <?php echo $especimen ?> </label>
                    </div>
                    
                </div>
            </div>

            <div class="column is-4 has-text-centered">
                <a class="button is-primary is-hovered" href="">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-file-text"></i>
                    </span>
                    <span>Hoja de datos UE</span>
                </a>
            </div>
        </div>

        <br>

        <form action="?page=ind_productividad/bkn_indProductividad" id="form1" method="POST">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h5 class="title is-5 has-text-grey-dark">General</h5>
                    <div class="field">
                        <label class="label">Postura</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="postura" id="postura">
                                    <option selected value="0">Elige una opcion</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Peso del huevo</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="peso" id="peso">
                        </div>
                        <p class="help">Valor en gramos con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">Masa del huevo</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="masa" id="masa">
                        </div>
                        <p class="help">Valor en gramos con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">Alimento inicial</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="alimentoI" id="alimentoI">
                        </div>
                        <p class="help">Valor en gramos con una posición decimal</p>
                    </div>
                </div>

                <div class="column is-2 is-hidden-mobile">&nbsp;</div>

                <div class="column is-4">
                    <div class="field">
                        <label class="label">Alimento residual</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="alimentoR" id="alimentoR">
                        </div>
                        <p class="help">Valor en gramos con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">Consumo de alimento</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="consumo" id="consumo">
                        </div>
                        <p class="help">Valor en gramos con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">Eficiencia de producción </label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="eficiencia" id="eficiencia">
                        </div>
                        <p class="help">Valor con una posición decimal</p>
                    </div>

                    <div class="control">
                        <input class="input is-hovered" type="hidden" name="experimental" id="experimental"
                            value="<?php echo $uExperimental; ?>">
                    </div>
                    <div class="control">
                        <input class="input is-hovered" type="hidden" name="unidadExp" id="unidadExp"
                            value="<?php echo $especimen; ?>">
                    </div>

                    <div class="field is-grouped columns is-centered" style="margin-top: 15px;">
                        <div class="control column has-text-centered is-4">
                            <button class="button is-success is-active">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-floppy"></i>
                                </span>
                                <span>Guardar</span>
                            </button>
                        </div>

                        <div class="control column has-text-centered is-4">
                            <button class="button is-danger is-active" type="reset">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-close"></i>
                                </span>
                                <span>Cancelar</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
            </div>
        </form>
    </div>
</section>
