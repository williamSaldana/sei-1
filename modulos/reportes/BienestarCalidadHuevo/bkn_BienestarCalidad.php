<?php


if(isset($_GET['funcion'])){

  $bienestar = $_GET['bienestar'];
  $calidad   = $_GET['calidad'];

  grafica($bienestar,$calidad);

}  
 
function grafica($bienestar,$calidad){

  require_once('../../../conexion/connection.php');
  $variable=$bienestar.$calidad;

  $sql="SELECT ";
  
  switch ($bienestar) {
    case '0':
      $sql.="bienestar.dannoQuilla,";
    break;
    
    case '1':
      $sql.="bienestar.relacion_hl,";
    break;

    case '2':
      $sql.="bienestar.inmovilidad_tonica,";
    break;

    case '3':
      $sql.="bienestar.frecuencia_cardiaca,";
    break;

    case '4':
      $sql.="bienestar.sdss,";
    break;

    case '5':
      $sql.="bienestar.sdsd,";
    break;

    case '6':
      $sql.="bienestar.rmssd,";
    break;

    case '7':
      $sql.="bienestar.relacion_bf_af,";
    break;

    case '8':
      $sql.="bienestar.temperatura,";
    break;
  }

  switch ($calidad) {
    case '0':
      $sql.="calidad_huevo.peso_huevo, especimenes.codigo ";
    break;
    
    case '1':
      $sql.="calidad_huevo.color_yema, especimenes.codigo ";
    break;

    case '2':
      $sql.="calidad_huevo.inclusiones, especimenes.codigo ";
    break;

    case '3':
      $sql.="calidad_huevo.altura_albumina, especimenes.codigo ";
    break;

    case '4':
      $sql.="calidad_huevo.peso_albumina, especimenes.codigo ";
    break;

    case '5':
      $sql.="calidad_huevo.u_haugh, especimenes.codigo ";
    break;

    case '6':
      $sql.="calidad_huevo.color_cascara, especimenes.codigo ";
    break;

    case '7':
      $sql.="calidad_huevo.peso_cascara, especimenes.codigo ";
    break;

    case '8':
      $sql.="calidad_huevo.ecuador, especimenes.codigo ";
    break;

    case '9':
      $sql.="calidad_huevo.polo_ancho, especimenes.codigo ";
    break;

    case '10':
      $sql.="calidad_huevo.polo_agudo, especimenes.codigo ";
    break;
  }


  $sql.="FROM
  bienestar
  INNER JOIN especimenes ON especimenes.id_especimen = bienestar.id_especimen
  INNER JOIN calidad_huevo ON especimenes.id_especimen = calidad_huevo.id_especimen";


  $result = mysqli_query($connection,$sql);
  $etiqueta = array();
  $valoresY = array();
  $valoresX = array();
  
  while ($ver = mysqli_fetch_row($result)) {
    array_push($etiqueta,$ver[0]);
   array_push($valoresY,$ver[1]);
   array_push($valoresX,$ver[2]);
   
  }
  
  $datoeE = json_encode($etiqueta);
  $datosX = json_encode($valoresX);
  $datosY = json_encode($valoresY);
  ?>
<div id="graficasBarras"></div>

<script type="text/javascript">
function conversor(json) {
    var parsed = JSON.parse(json);
    var arr = [];
    for (var x in parsed) {
        arr.push(parsed[x]);
    }
    return arr;
}
</script>

<script>
etiqueta = conversor('<?php echo $datoeE ?>');
datosX = conversor('<?php echo $datosX ?>');
datosY = conversor('<?php echo $datosY ?>');

var data = [{
    x: datosX,
    y: datosY,
    type: 'bar',
    text: etiqueta
}];

Plotly.newPlot('graficasBarras', data);
</script>
<?php
}
?>