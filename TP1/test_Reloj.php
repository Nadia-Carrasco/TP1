<?php
include "Reloj.php";
//se crea el objeto Reloj
$objReloj=new Reloj(23,59,57);
//Invoco los metodos
echo $objReloj . "\n";
$objReloj->incrementar();
echo "1er incremento: " . $objReloj . "\n";
$objReloj->incrementar();
echo "2do incremento: " . $objReloj . "\n";
$objReloj->incrementar();
echo "3er incremento: " . $objReloj . "\n";

$objReloj->puesta_a_cero();
echo $objReloj . "\n";

