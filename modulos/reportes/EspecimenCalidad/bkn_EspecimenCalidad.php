<?php


if(isset($_GET['funcion'])){

  $calidad = $_GET['calidad'];
  $especimen   = $_GET['especimen'];

  grafica($calidad,$especimen);

}  
 
function grafica($calidad,$especimen){

  require_once('../../../conexion/connection.php');
  $variable=$calidad.$especimen;

  $sql="SELECT ";
  
  switch ($calidad) {
    case '0':
      $sql.="calidad_huevo.peso_huevo, ";
    break;
    
    case '1':
      $sql.="calidad_huevo.color_yema, ";
    break;

    case '2':
      $sql.="calidad_huevo.inclusiones, ";
    break;

    case '3':
      $sql.="calidad_huevo.altura_albumina, ";
    break;

    case '4':
      $sql.="calidad_huevo.peso_albumina, ";
    break;

    case '5':
      $sql.="calidad_huevo.u_haugh, ";
    break;

    case '6':
      $sql.="calidad_huevo.color_cascara, ";
    break;

    case '7':
      $sql.="calidad_huevo.peso_cascara, ";
    break;

    case '8':
      $sql.="calidad_huevo.ecuador, ";
    break;

    case '9':
      $sql.="calidad_huevo.polo_ancho, ";
    break;

    case '10':
      $sql.="calidad_huevo.polo_agudo, ";
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
  especimenes
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
    x: datosX,
    y: datosY,
    type: 'bar'
}];

Plotly.newPlot('graficasBarras', data);
</script>
<?php
}
?>