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
                            <input class="input is-hovered" type="number" name="asistente" id="asistente" placeholder="seleccione un asistente" disabled >

                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="control">
                        <a class="button is-primary is-active" href="?page=gestion_ue/prueba">
                            <span class="icon is-small">
                                <i class="zmdi zmdi-accounts-add"></i>
                            </span>
                            <span>Buscar</span>
                        </a>
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
    </div>
</section>

<!-- inicio modal -->

<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">

        <header class="modal-card-head is-radiusless">
            <p class="modal-card-title">Seleccione asistente</p>
            <button class="delete" aria-label="close"></button>
        </header>

            <section class="modal-card-body">



                <table>

                    <tr>
                        <td>
                            <label class="label">Código Ucc&emsp;&emsp;&emsp;</label>
                        </td>
                        <td>
                            <input class="input is-hovered" type="number" name="codigoUCC" id="codigoUCC" require>
                        </td>
                        <td>
                            &emsp;&emsp;&emsp;&emsp;<input type="button" name="codigoUCC" value="enviar" id="codigoUCC" onclick="poblarTabla()"
                            class="button is-primary is-active" />

                        </td>
                    </tr>
                </table>

               
                <br><br>
                <div class="columns">
                    <div class="column is-12">
                        <div class="table-container">
                            <table class="table is-hoverable is-fullwidth" id="tableEstudiantes" style="display: none;" align="center">
                                <thead>
                                    <tr>
                                        <th class="has-text-centered">Codigo</th>
                                        <th class="has-text-centered">Nombre</th>
                                    </tr>
                                </thead>

                                <tr id="clon">
                                    <td id="tdCodigo"></td>
                                    <td id="tdNombre"></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>

            </section>
       
    </div>
</div>
<script src="recursos/js/jquery.min.js"></script>
<script src="recursos/js/navbar.js"></script>
<script src="recursos/js/modal.js"></script>
<script src="recursos/js/mensaje.js"></script>