<?php

$codigo = $_GET['nombre'];

require('recursos/phpqrcode/qrlib.php');

$dir = 'codigoQR/';

if(!file_exists($dir)){
   
   mkdir($dir);

}

if (file_exists($dir.'QR_'.$codigo.'.png')) {
    echo('El codigo QR ya existe');
}else {
    $fileName = $dir.'QR_'.$codigo.'.png';
$tamaño = 10;
$level = 'M';
$frameSize = 3;
$contenido = $codigo ;

QRcode::png($contenido,$fileName,$level,$tamaño,$frameSize);

echo '<img src = "'.$fileName.'"/>';
}



?>