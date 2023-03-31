<?php 
include "Calculadora.php";
$cuentas= new Calculadora(2,4);
echo "Suma: ". $cuentas->suma() . "\n";
echo "Resta: ". $cuentas->resta() . "\n";
echo "División: " . $cuentas->division() . "\n";
echo "Multiplicación: " . $cuentas->multiplicacion() . "\n";
echo $cuentas;