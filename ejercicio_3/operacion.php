<?php

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];

$raiz = sqrt(($b**2) - (4 * $a * $c));

if (($b**2) - (4 * $a * $c)>=0){

$x1 = ($b * -1) +  $raiz / (2 * $a);
$x2 = ($b * -1) - $raiz / (2 * $a);

echo "X1 es: $x1"; 
echo "<br>";
echo "<br>";
echo "X2 es: $x2";

}else{
echo "no se puede calcular por tener una raiz negativa";
}
?>