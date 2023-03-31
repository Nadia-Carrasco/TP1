<?php
include "cuadrado.php";
$cuadrado=new Cuadrado(0,4,4,0,0,-4,-4,0);
echo $cuadrado;
echo $cuadrado->area() . "\n";
echo $cuadrado;

echo $cuadrado->aumentarTamanio(2);
echo $cuadrado;
echo $cuadrado->desplazar(2);
echo $cuadrado;