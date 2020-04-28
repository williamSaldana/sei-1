<script>
// Almacena la información en sessionStorage
sessionStorage.setItem('ventana', 'nada');
</script>

<section class="section">
    <div class="container">
        <form action="" method="">
            <div class="columns">

            <div class="field">
                    <label class="label">Unidad Experimental</label>
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="experimental" id="experimental">
                                <option value="0">Nombre</option>
                                <option value="1">Creacion</option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Productividad</label>
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="productividad" id="productividad">
                                <option value="0">Fecha</option>
                                <option value="1">Postura</option>
                                <option value="2">Peso de huevo</option>
                                <option value="3">Masa de huevo</option>
                                <option value="4">Alimento inicial</option>
                                <option value="5">Alimento residual</option>
                                <option value="6">Consumo de alimento</option>
                                <option value="7">Eficiencia de produccion</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <div class="field is-grouped" style="margin-top: 30px;">
                <div class="control">
                    <a class="button is-primary is-active" onclick="graficaExperimentalProductividad();">
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
                                <div id="graficoExperimentalProductividad"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

