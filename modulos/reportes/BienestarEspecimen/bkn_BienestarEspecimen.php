<?php


if(isset($_GET['funcion'])){

  $bienestar = $_GET['bienestar'];
  $especimen   = $_GET['especimen'];

  grafica($bienestar,$especimen);

}  
 
function grafica($bienestar,$especimen){

  require_once('../../../conexion/connection.php');
  $variable=$bienestar.$especimen;

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

  switch ($especimen) {
    case '0':
      $sql.="especimenes.codigo ";
    break;
    
    case '1':
      $sql.="especimenes.peso ";
    break;

    case '2':
      $sql.="especimenes.f_nacimiento ";
    break;

  }


  $sql.="FROM
  bienestar
  INNER JOIN especimenes ON especimenes.id_especimen = bienestar.id_especimen
  INNER JOIN calidad_huevo ON especimenes.id_especimen = calidad_huevo.id_especimen";

  echo $sql;

  $result = mysqli_query($connection,$sql);
  $valoresY = array();
  $valoresX = array();
  
  while ($ver = mysqli_fetch_row($result)) {
   array_push($valoresY,$ver[0]);
   array_push($valoresX,$ver[1]);
   
  }
  
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
datosX = conversor('<?php echo $datosX ?>');
datosY = conversor('<?php echo $datosY ?>');

var data = [{
    x: 'uno',
    y: 10,
    type: 'bar'
}];

Plotly.newPlot('graficasBarras', data);
</script>
<?php
}
?>