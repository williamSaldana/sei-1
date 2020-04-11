<?php
 
  $num = $_GET['codigo'];
  //exit("prueba".$num);
  

  $consulta=ConsultarProducto($num);

  function ConsultarProducto($a){
    include "conexion/connection.php";
    $sentencia="SELECT * FROM usuarios WHERE codigoUCC='".$a."' ";
    
    $resultado=mysqli_query($connection,$sentencia);
    $filas=mysqli_fetch_assoc($resultado);
    return [
      $filas['codigoUCC'],
      $filas['nombres'],
	  $filas['primer_apellido'],
	  $filas['segundo_apellido'],
      $filas['genero'],
	  $filas['telefono'],
	  $filas['email'],
      $filas['id_rol']
    ];

  }

?>



<section class="section">
    <div class="container">
        <form action="?page=usuarios/actualizarUsuario2" method="POST" id="form1">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h4 class="title is-4 has-text-grey-dark">Actualización de usuarios</h4>
                    <div class="field">
                        <label class="label">Código Ucc</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" type="text" name="codigoUcc" id="codigoUcc" ; value="<?php echo $consulta[0]?>" readonly>
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-accounts-list"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Nombres</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" name="nombres" id="nombres" ; value="<?php echo $consulta[1]?>">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-text"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Primer apellido</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" name="primerApellido" id="primerApellido" ; value="<?php echo $consulta[2]?>">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-item-1"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Segundo apellido</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" name="segundoApellido" id="segundoApellido" ; value="<?php echo $consulta[3]?>">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-collection-item-2"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Género</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="genero" id="genero">
                                    <?php 
		                              if ($consulta[4]=="M") {
			                             echo "<option selected value='1'>Masculino</option>";
			                             echo "<option value='2'>Femenino</option>";
		                              }else{
			                             echo "<option selected value='2'>Femenino</option>";
			                             echo "<option value='1'>Masculino</option>";
		                            }?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Telefono</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" name="telefono" id="telefono" ; value="<?php echo $consulta[5]?>">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-account-box-phone"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="column is-2 is-hidden-mobile">&nbsp;</div>

                <div class="column is-4">
                    <div class="field">
                        <label class="label">E-mail</label>
                        <div class="control has-icons-right">
                            <input class="input is-hovered" name="email" id="email" ; value="<?php echo $consulta[6]?>">
                            <span class="icon is-small is-right">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Permiso acceso</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="rol" id="rol">
                                    <?php 
		                              if ($consulta[7]=="1") {
			                             echo "<option selected value='1'>Administrador</option>";
			                             echo "<option value='2'>Asistente</option>";
		                              }else{
			                             echo "<option selected value='2'>Asistente</option>";
			                             echo "<option value='1'>Admnistrador</option>";
		                             }?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h4 class="title is-4 has-text-grey-dark" style="margin-top: 40px;">
                        Credenciales de acceso
                    </h4>
                    <p class="has-text-left" style="margin-bottom: 10px;">
                        Tenga en cuenta que la contraseña debe tener entre 7 y 10 caracteres
                    </p>

                   

                    <div class="field">
                        <label class="label">Status</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="estado" id="estado">
                                    <?php 
		                              if ($consulta[9]=="1") {
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
                                    <i class="zmdi zmdi-accounts"></i>
                                </span>
                                <span>Actualizar</span>
                            </button>
                        </div>

                        <div class="control">
                            <a class="button is-primary is-active" href="?page=usuarios/listarUsuario">
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
