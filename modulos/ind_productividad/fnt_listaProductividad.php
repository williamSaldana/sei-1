<?php
    require ("conexion/connection.php");  
    
    $sql = "SELECT productividad.fecha,productividad.postura,productividad.peso_huevo,productividad.masa_huevo,productividad.alimento_inicial,productividad.alimento_residual,productividad.consumo_alimento,productividad.eficiencia_produccion 
    FROM `productividad` ";

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
                    &nbsp; Lista Productividad
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
                                <th class="has-text-centered">Postura</th>
                                <th class="has-text-centered">Peso Huevo</th>
                                <th class="has-text-centered">Masa huevo</th>
                                <th class="has-text-centered">Alimento inicial</th>
                                <th class="has-text-centered">Alimento residual</th>
                                <th class="has-text-centered">Comsumo alimento</th>
                                <th class="has-text-centered">Eficiencia produccion</th>
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
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>