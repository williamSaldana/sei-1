<?php
    require("conexion/connection.php");

    $uExperimental = $_GET['experimental'];
    $especimen = $_GET['unidadExp'];
?>

<style type="text/css">
#opt1 {
    background-color: #E8D25B;
}

#opt2 {
    background-color: #EECD48;
}

#opt3 {
    background-color: #EFCB3F;
}

#opt4 {
    background-color: #F0C82B;
}

#opt5 {
    background-color: #F3BC19;
}

#opt6 {
    background-color: #F3B40D;
}

#opt7 {
    background-color: #F2B303;
}

#opt8 {
    background-color: #F4AC02;
}

#opt9 {
    background-color: #F7A001;
}

#opt10 {
    background-color: #F49402;
}

#opt11 {
    background-color: #F58805;
}

#opt12 {
    background-color: #F37C04;
}

#opt13 {
    background-color: #F87509;
}

#opt14 {
    background-color: #FA6719;
}

#opt15 {
    background-color: #F85D25;
}

#opt20 {
    background-color: #FAFAFA;
}

#opt21 {
    background-color: #F4EDE5;
}

#opt22 {
    background-color: #F5E8D7;
}

#opt23 {
    background-color: #F0DEC8;
}

#opt24 {
    background-color: #F2DCC5;
}

#opt25 {
    background-color: #EDCEAF;
}

#opt26 {
    background-color: #E2B794;
}

#opt27 {
    background-color: #E8B283;
}

#opt28 {
    background-color: #DB9F6D;
}

#opt29 {
    background-color: #DC9760;
}

#opt30 {
    background-color: #CF7541;
}

#opt31 {
    background-color: #D96E42;
}
</style>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-book"></i>
                    </span>
                    &nbsp; Indicadores calidad del huevo
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

        <form action="?page=ind_calidadh/bkn_calidadH" id="form1" method="POST">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h5 class="title is-5 has-text-grey-dark">General</h5>

                    <div class="field">
                        <label class="label">Peso del huevo</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="peso" id="peso">
                        </div>
                        <p class="help">Valor en gramos con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">Color de la yema</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="color" id="color">
                                    <option selected value="0">Elige una opcion</option>
                                    <option id="opt1" value="1">1</option>
                                    <option id="opt2" value="2">2</option>
                                    <option id="opt3" value="3">3</option>
                                    <option id="opt4" value="4">4</option>
                                    <option id="opt5" value="5">5</option>
                                    <option id="opt6" value="6">6</option>
                                    <option id="opt7" value="7">7</option>
                                    <option id="opt8" value="8">8</option>
                                    <option id="opt9" value="9">9</option>
                                    <option id="opt10" value="10">10</option>
                                    <option id="opt11" value="11">11</option>
                                    <option id="opt12" value="12">12</option>
                                    <option id="opt13" value="13">13</option>
                                    <option id="opt14" value="14">14</option>
                                    <option id="opt15" value="15">15</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Inclusiones</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="inclusiones" id="inclusiones">
                                    <option value="No tiene">No tiene</option>
                                    <option value="Carne">Carne</option>
                                    <option value="Sangre">Sangre</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Altura de la albúmina </label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="albumina" id="albumina">
                        </div>
                        <p class="help">Valor entre 0 y 99 con dos posiciones decimales</p>
                    </div>

                    <div class="field">
                        <label class="label">Peso de la albúmina </label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="pAlbumina" id="pAlbumina">
                        </div>
                        <p class="help">Valor entre 0 y 99 con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">Unidades Haugh</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="unidades" id="unidades">
                        </div>
                        <p class="help">Valor con dos posiciones decimales</p>
                    </div>
                </div>

                <div class="column is-2 is-hidden-mobile">&nbsp;</div>

                <div class="column is-4">
                    <div class="field">
                        <label class="label">Color de la cáscara</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="colorCascara" id="colorCascara">
                                    <option selected value="0">Elige una opcion</option>
                                    <option id="opt20" value="5">5</option>
                                    <option id="opt21" value="10">10</option>
                                    <option id="opt22" value="20">20</option>
                                    <option id="opt23" value="30">30</option>
                                    <option id="opt24" value="40">40</option>
                                    <option id="opt25" value="50">50</option>
                                    <option id="opt26" value="60">60</option>
                                    <option id="opt27" value="70">70</option>
                                    <option id="opt28" value="80">80</option>
                                    <option id="opt29" value="90">90</option>
                                    <option id="opt30" value="100">100</option>
                                    <option id="opt31" value="110">110</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Peso de la cáscara</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="pesoCascara" id="pesoCascara">
                        </div>
                        <p class="help">Valor entre 0 y 100 con una posición decimal</p>
                    </div>

                    <h5 class="title is-5 has-text-grey-dark" style="margin-top: 30px;">
                        Grosor de la cáscara
                    </h5>

                    <div class="field">
                        <label class="label">Ecuador</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="ecuador" id="ecuador">
                        </div>
                        <p class="help">Valor entero entre 0 y 1000</p>
                    </div>

                    <div class="field">
                        <label class="label">Polo ancho</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="poloAncho" id="poloAncho">
                        </div>
                        <p class="help">Valor entero entre 0 y 1000</p>
                    </div>

                    <div class="field">
                        <label class="label">Polo agudo</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="poloAgudo" id="poloAgudo">
                        </div>
                        <p class="help">Valor entero entre 0 y 1000</p>
                    </div>

                    <div class="control">
                        <input class="input is-hovered" type="hidden" name="experimental" id="experimental"
                            value="<?php echo $uExperimental; ?>">
                    </div>
                    <div class="control">
                        <input class="input is-hovered" type="hidden" name="unidadExp" id="unidadExp"
                            value="<?php echo $especimen; ?>">
                    </div>

                    <div class="field is-grouped columns is-centered" style="margin-top: 10px;">
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