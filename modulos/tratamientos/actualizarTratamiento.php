<?php
 
  $num = $_GET['nombre'];
  //exit("prueba".$num);
  


  $consulta=ConsultarTratamiento($num);

  function ConsultarTratamiento($a){
    include "conexion/connection.php";
    $sentencia="SELECT * FROM tratamientos WHERE nombre='".$a."' ";
    
    $resultado=mysqli_query($connection,$sentencia);
    $filas=mysqli_fetch_assoc($resultado);
    return [
      $filas['nombre'],
      $filas['observaciones'],
	  $filas['status_tratamiento'],
	  ];
  }
?>



<section class="section">
    <div class="container">
        <form action="?page=tratamientos/actualizarTratamiento2" method="POST" id="form1">
            <div class="columns">
                <div class="column is-4 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h4 class="title is-4 has-text-grey-dark has-text-centered">
                        Actualización de tratamientos
                    </h4>
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="nombre" id="nombre" ; value="<?php echo $consulta[0]?>" readonly>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Observaciones</label>
                        <div class="control">
                            <textarea class="textarea is-hovered has-fixed-size" name="observaciones" id="observaciones" required><?php echo $consulta[1]?></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Status</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="status_tratamiento" id="status_tratamiento">
                                    <?php 
		                              if ($consulta[2]=="1") {
			                          echo "<option selected value='1'>Activo</option>";
			                             echo "<option value='0'>Inactivo</option>";
		                              }else{
			                             echo "<option selected value='0'>Inactivo</option>";
			                             echo "<option value='1'>Activo</option>";
		                            }?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field is-grouped" style="margin-top: 30px;">
                        <div class="control">
                            <button class="button is-primary is-active" onclick="getData()">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-format-list-bulleted"></i>
                                </span>
                                <span>Actualizar tratamiento</span>
                            </button>
                        </div>

                        <div class="control">
                            <a class="button is-primary is-active" href="?page=tratamientos/listarTratamiento">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-close"></i>
                                </span>
                                <span>Cancelar</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column is-4 is-hidden-mobile">&nbsp;</div>
            </div>
        </form>
    </div>
</section>
