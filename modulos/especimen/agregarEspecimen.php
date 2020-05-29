   <?php
    $uex = $_GET['uex'];
    
   ?>
   
   
   <form action="?page=especimen/insertEspecimen" method="POST">

   <div class="column is-6">
               <section class="section">
                   <div class="container">
                       <div class="columns">
                           <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                           <div class="column is-13">
                           <h4 class="title is-4 has-text-grey-dark">Agregar especimen</h4>
                               <div class="field">
                                   <label class="label">Codigo</label>
                                   <div class="control has-icons-right">
                                       <input class="input is-hovered" type="text" name="codigo"
                                           id="codigoEspecimen">
                                       <span class="icon is-small is-right">
                                           <i class="zmdi zmdi-accounts-list"></i>
                                       </span>
                                   </div>
                               </div>

                               <div class="field">
                                   <label class="label">Peso</label>
                                   <div class="control has-icons-right">
                                       <input class="input is-hovered" type="number" name="peso"
                                           id="pesoEspecimen">
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
                                           id="uExperimental" value=<?php echo $uex ?>>
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
                               <div class="control">
                                   <button class="button is-primary is-active">
                                       <span class="icon is-small">
                                           <i class="zmdi zmdi-accounts-add"></i>
                                       </span>
                                       <span>Agregar Especimen</span>
                                   </button>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
           </div>

           

   </form>

