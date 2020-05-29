<?php
    require ("conexion/connection.php");  
    
    $sql = "SELECT bienestar.fecha,bienestar.dannoQuilla,bienestar.relacion_hl,bienestar.inmovilidad_tonica,bienestar.frecuencia_cardiaca,bienestar.sdss,bienestar.sdsd,bienestar.rmssd,bienestar.relacion_bf_af,bienestar.temperatura 
    FROM `bienestar`";

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
                    &nbsp; Lista Bienestar
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
                                <th class="has-text-centered">Daño Quilla</th>
                                <th class="has-text-centered">Relacion HL</th>
                                <th class="has-text-centered">Inmovilidad tonica</th>
                                <th class="has-text-centered">Frecuencia cardiaca</th>
                                <th class="has-text-centered">sdss</th>
                                <th class="has-text-centered">sdsd</th>
                                <th class="has-text-centered">rmssd</th>
                                <th class="has-text-centered">relscion_bf_af</th>
                                <th class="has-text-centered">temperatura</th>
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
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>