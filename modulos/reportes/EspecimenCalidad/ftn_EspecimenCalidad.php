<script>
// Almacena la información en sessionStorage
sessionStorage.setItem('ventana', 'nada');
</script>

<section class="section">
    <div class="container">
        <form action="" method="">
            <div class="columns">

            <div class="field">
                    <label class="label">especimen</label>
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="especimen" id="especimen">
                                <option value="0">Codigo</option>
                                <option value="1">Peso</option>
                                <option value="2">Fecha nacimiento</option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Calidad huevo</label>
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="calidad" id="calidad">
                                <option value="0">Peso huevo</option>
                                <option value="1">Color yema</option>
                                <option value="2">Inclusiones</option>
                                <option value="3">Altura albumina</option>
                                <option value="4">Peso albumina</option>
                                <option value="7">U HAUGH</option>
                                <option value="6">Color cascara</option>
                                <option value="7">Peso cascara</option>
                                <option value="8">ecuador</option>
                                <option value="9">Polo ancho</option>
                                <option value="10">Polo agudo</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <div class="field is-grouped" style="margin-top: 30px;">
                <div class="control">
                    <a class="button is-primary is-active" onclick="graficaEspecimenCalidad();">
                        <span>Generar grafica</span>
                    </a>
                </div>
            </div>
        </form>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        Especimen vs Bienestar
                    </div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="graficoEspecimenCalidad"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

