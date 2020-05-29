<?php
  $mysqli = new mysqli('localhost', 'root', '', 'sei');
  require("conexion/connection.php");
include("modulos/gestion_ue/agregaTratamiento.php");


?>

<script type="text/javascript">

function valores(form, arreglo) {
    
console.log(form);
console.log(arreglo);
 todos = new Array();

 console.log(form[arreglo][1]);
 
 for (var i = 0, total = form[arreglo].length; i < total; i++){
     
     if (form[arreglo][i].checked) {
         
         todos.push(form[arreglo][i].value);
    }

 }

  return todos;

}
</script>
<!-- ?page=gestion_ue/insertarUE -->
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-1 is-hidden-mobile">&nbsp;</div>
            <div class="column is-5">
                <form action="" id="form1" method="POST">

                    <h4 class="title is-4 has-text-grey-dark">Registro unidades experimentales</h4>

                    <div class="field">
                        <label class="label">Nombre unidad experiemntal</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" required name="nombre" id="nombre" required>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-accounts-list"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">

                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="hidden" name="txtasis" id="txtasis"
                                placeholder="seleccione un asistente">

                        </div>
                    </div>

                    <div class="control">
                        <a class="button is-primary is-active" id="showModal">
                            <span class="icon is-small">
                                <i class="zmdi zmdi-accounts-add"></i>
                            </span>
                            <span>Agregar Asistente</span>
                        </a>
                    </div>
                    <br>

                    <div class="columns">
                        <div class="column is-15">
                            <div class="table-container">
                                <table class="table is-hoverable is-fullwidth" name="table_result" id="table_result"
                                    style="display: none;" align="center">

                                    <thead>
                                        <tr>
                                            <th class="has-text-centered"></th>
                                            <th class="has-text-centered">Codigo</th>
                                            <th class="has-text-centered">Nombre</th>
                                            <th class="has-text-centered">Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ttable">
                                        <tr id="clon">
                                            <td id="tdCodigo"></td>
                                            <td id="tdNombre"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Estado</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="estado" id="estadoUE">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="hidden" name="txtTratamiento" id="txtTratamiento">
                        </div>
                    </div>

                    <h4 class="title is-4 has-text-grey-dark">Agregar tratamiento</h4>

                    <?php
                        while ($fila = mysqli_fetch_row($resultado)) { 
                    ?>
                            
                            <input type="checkbox" id="tratamiento" name="tratamiento[]" value="<?php echo $fila[0]; ?>">
                            &nbsp
                            <?php echo $fila[0]; ?>
                           
                            <br>
                            
                    <?php 
                        }
                    ?>
                    <button onclick="alert(valores(this.form, 'tratamiento[]'))" >mostrar</button>
                    <div class="columns">
                        <div class="column is-15">
                            <div class="table-container">
                                <table class="table is-hoverable is-fullwidth" name="table_result" id="table_result"
                                    style="display: none;" align="center">

                                    <thead>
                                        <tr>
                                            <th class="has-text-centered"></th>
                                            <th class="has-text-centered">Codigo</th>
                                            <th class="has-text-centered">Nombre</th>
                                            <th class="has-text-centered">Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ttable">
                                        <tr id="clon">
                                            <td id="tdCodigo"></td>
                                            <td id="tdNombre"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="column is-1 is-hidden-mobile">&nbsp;</div>

            <div class="column is-3">
                <section class="section">
                    <div class="container">
                        <div class="columns">
                            <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                            <div class="column is-13">
                                <h4 class="title is-4 has-text-grey-dark">Registro especimenes</h4>
                                <div class="field">
                                    <label class="label">Codigo</label>
                                    <div class="control has-icons-right">
                                        <input class="input is-hovered" type="text" name="codigoEspecimen"
                                            id="codigoEspecimen">
                                        <span class="icon is-small is-right">
                                            <i class="zmdi zmdi-accounts-list"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Peso</label>
                                    <div class="control has-icons-right">
                                        <input class="input is-hovered" type="number" name="pesoEspecimen"
                                            id="pesoEspecimen"
                                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                                        <span class="icon is-small is-right">
                                            <i class="zmdi zmdi-collection-text"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Fecha nacimiento</label>
                                    <div class="control has-icons-right">
                                        <input class="input is-hovered" type="date" name="fNacimiento"
                                            id="fNacimientoEspecimen">
                                        <span class="icon is-small is-right">
                                            <i class="zmdi zmdi-collection-text"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">

                                    <div class="control has-icons-right">
                                        <input class="input is-hovered" type="hidden" name="uExperimental"
                                            id="uExperimental">
                                        <span class="icon is-small is-right">
                                            <i class="zmdi zmdi-collection-text"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Estado</label>
                                    <div class="control">
                                        <div class="select is-fullwidth">
                                            <select name="estado" id="estadoEspecimen">
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="control">
                                    <a class="button is-primary is-active" onclick="agregarEspecimen();">
                                        <span class="icon is-small">
                                            <i class="zmdi zmdi-accounts-add"></i>
                                        </span>
                                        <span>Agregar Especimen</span>
                                    </a>
                                </div>

                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="table-container">
                                            <table class="table is-hoverable is-fullwidth" id="tableEspecimen"
                                                name="tableEspecimen" style="display: none;" align="center">

                                                <thead>
                                                    <tr>
                                                        <th class="has-text-centered"></th>
                                                        <th class="has-text-centered">Codigo</th>
                                                        <th class="has-text-centered">peso</th>
                                                        <th class="has-text-centered">fecha</th>
                                                        <th class="has-text-centered">Estado</th>
                                                        <th class="has-text-centered">Operaciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="ttableEspecimen">
                                                    <tr id="clon">
                                                        <td id="tdCodigo"></td>
                                                        <td id="tdNombre"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-grouped" style="margin-top: 30px;">

                                    <div class="control">
                                        <a class="button is-primary is-active" onclick="registroUE();">
                                            <span class="icon is-small">
                                                <i class="zmdi zmdi-close"></i>
                                            </span>
                                            <span>Crear Unidad Experimental</span>
                                        </a>
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
                    </div>
                </section>
            </div>

            </form>

            <!-- comienza especimen-->


        </div>
    </div>
    </div>
</section>


<!-- inicio modal asistentes -->

<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">

        <header class="modal-card-head is-radiusless">
            <p class="modal-card-title">Seleccione asistente</p>
            <button class="delete" aria-label="close" id="cerrar"></button>
        </header>

        <section class="modal-card-body">

            <table>

                <tr>
                    <td>
                        <label class="label">Código Ucc&emsp;&emsp;&emsp;</label>
                    </td>

                    <td>
                        <input class="input is-hovered" type="text" name="codigoUCC" id="txtnom" placeholder="Buscar..."
                            onkeyup="busquedaUsuarioUE();">
                    </td>

                </tr>
            </table>

            <br><br>
            <div id="datosU_UE"></div>

        </section>
    </div>
</div>


<script src="recursos/js/jquery.min.js"></script>
<script src="recursos/js/navbar.js"></script>
<script src="recursos/js/peticion.js"></script>
<script src="recursos/js/modal.js"></script>