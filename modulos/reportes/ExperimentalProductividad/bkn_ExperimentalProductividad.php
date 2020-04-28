<?php


if(isset($_GET['funcion'])){

  $experimental = $_GET['experimental'];
  $productividad   = $_GET['productividad'];

  grafica($experimental,$productividad);

}  
 
function grafica($experimental,$productividad){

  require_once('../../../conexion/connection.php');
  $variable=$experimental.$productividad;

  $sql="SELECT ";
  
  switch ($experimental) {
    case '0':
      $sql.="u_experimentales.nombre, ";
    break;
    
    case '1':
      $sql.="u_experimentales.creacion, ";
    break;

  }

  switch ($productividad) {
    case '0':
      $sql.="productividad.fecha ";
    break;
    
    case '1':
      $sql.="productividad.postura ";
    break;

    case '2':
      $sql.="productividad.peso_huevo ";
    break;

    case '3':
        $sql.="productividad.masa_huevo ";
      break;
      
    case '4':
        $sql.="productividad.alimento_inicial ";
    break;

    case '5':
        $sql.="productividad.alimento_residual ";
    break;

    case '6':
        $sql.="productividad.consumo_alimento ";
    break;

    case '7':
        $sql.="productividad.eficiencia_produccion ";
    break;
  }


  $sql.="FROM
  u_experimentales
  INNER JOIN productividad ON u_experimentales.id_uexperimental = productividad.id_uexperimental";

  echo $sql;

  $result = mysqli_query($connection,$sql);
  $valoresY = array();
  $valoresX = array();
  
  while ($ver = mysqli_fetch_row($result)) {
   array_push($valoresY,$ver[1]);
   array_push($valoresX,$ver[0]);
   
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