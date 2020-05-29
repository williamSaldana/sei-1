
    <?php
 
  $num = $_GET['codigo'];
  //exit("prueba".$num);
  

  $consulta=ConsultarEspecimen($num);

  function ConsultarEspecimen($a){
    include "conexion/connection.php";
    $sentencia="SELECT * FROM especimenes WHERE codigo='".$a."' ";
    
    $resultado=mysqli_query($connection,$sentencia);
    $filas=mysqli_fetch_assoc($resultado);
    return [
      $filas['codigo'],
      $filas['peso'],
      $filas['f_nacimiento'],
      $filas['id_uexperimental'],
      $filas['status_especimen']
    ];

  }

?>
    <form action="modulos/especimen/bkn_ActualizarEspecimen.php?dato=<?php echo $consulta[0]?>" method="POST">

    <div class="column is-6">
                <section class="section">
                    <div class="container">
                        <div class="columns">
                            <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                            <div class="column is-13">
                            <h4 class="title is-4 has-text-grey-dark">Actualizacion especimenes</h4>
                                <div class="field">
                                    <label class="label">Codigo</label>
                                    <div class="control has-icons-right">
                                        <input class="input is-hovered" type="text" name="codigo"
                                            id="codigoEspecimen" value="<?php echo $consulta[0]?>">
                                        <span class="icon is-small is-right">
                                            <i class="zmdi zmdi-accounts-list"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Peso</label>
                                    <div class="control has-icons-right">
                                        <input class="input is-hovered" type="number" name="peso"
                                            id="pesoEspecimen" value="<?php echo $consulta[1]?>" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                                        <span class="icon is-small is-right">
                                            <i class="zmdi zmdi-collection-text"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Fecha nacimiento</label>
                                    <div class="control has-icons-right">
                                        <input class="input is-hovered" type="date" name="fNacimiento"
                                            id="fNacimientoEspecimen" value="<?php echo $consulta[2]?>">
                                        <span class="icon is-small is-right">
                                            <i class="zmdi zmdi-collection-text"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">

                                    <div class="control has-icons-right">
                                        <input class="input is-hovered" type="hidden" name="uExperimental"
                                            id="uExperimental" value="<?php echo $consulta[3]?>">
                                        <span class="icon is-small is-right">
                                            <i class="zmdi zmdi-collection-text"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Estado</label>
                                    <div class="control">
                                        <div class="select is-fullwidth">
                                            <select name="estado" id="estado" value="<?php echo $consulta[4]?>">
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="control">
                                    <button class="button is-primary is-active">
                                        <span class="icon is-small">
                                            <i class="zmdi zmdi-accounts-add"></i>
                                        </span>
                                        <span>Actualizar Especimen</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            

    </form>

