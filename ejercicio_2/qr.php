<?php



$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];

echo "<br>";
echo "Nombre: ".$nombre;
echo "<br>";
echo "Apellido: ". $apellido;

require ("phpqrcode/qrlib.php");

//$dir = 'temp/';
$d = dir("temp/");


$filename='temp/test.png';
$tamanio = 15;
$level= 'M';
$frameSize = 3;
$contenido= $nombre." ".$apellido;

QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);


echo '<img src="'.$filename.'"/>';

?>