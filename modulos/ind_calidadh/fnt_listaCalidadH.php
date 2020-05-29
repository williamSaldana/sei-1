<?php
    require ("conexion/connection.php");  
    
    $sql = "SELECT calidad_huevo.fecha,calidad_huevo.peso_huevo,calidad_huevo.color_yema,calidad_huevo.inclusiones,calidad_huevo.altura_albumina,calidad_huevo.peso_albumina,calidad_huevo.u_haugh,calidad_huevo.color_cascara,calidad_huevo.peso_cascara,calidad_huevo.ecuador,calidad_huevo.polo_ancho,calidad_huevo.polo_agudo 
    FROM `calidad_huevo` ";

    $res=mysqli_query($connection,$sql) or die('error en consulta'.mysqli_error($connection));

 
?>


<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    &nbsp; Lista Calidad Huevo
                </h4>
            </div>
            
            <div class="column is-4 is-hidden-mobile">&nbsp;</div>
                
            <div class="column is-4 has-text-centered">
                
            </div>
        </div>

        <div class="columns" style="margin-top: 30px;">
            <div class="column is-12">
                <div class="table-container">
                    <table class="table is-hoverable is-fullwidth" id="usuarios">
                        <thead>
                            <tr>
                                <th class="has-text-centered">Fecha</th>
                                <th class="has-text-centered">Peso huevo</th>
                                <th class="has-text-centered">Color Yema</th>
                                <th class="has-text-centered">Inclusiones</th>
                                <th class="has-text-centered">Altura albumina</th>
                                <th class="has-text-centered">Peso albumina</th>
                                <th class="has-text-centered">U_haugh</th>
                                <th class="has-text-centered">Color cascara</th>
                                <th class="has-text-centered">Peso Cascara</th>
                                <th class="has-text-centered">Ecuador</th>
                                <th class="has-text-centered">Polo ancho</th>
                                <th class="has-text-centered">Polo agudo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  while ($array = mysqli_fetch_row($res)) { ?>
                                <tr>
                                    <td class="has-text-centered"> <?php echo $array[0]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[1]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[2]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[3]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[4]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[5]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[6]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[7]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[8]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[9]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[10]; ?> </td>
                                    <td class="has-text-centered"> <?php echo $array[11]; ?> </td>
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>