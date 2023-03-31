<?php 
include "CuentaBancaria.php";
$cuentaBancaria= new CuentaBancaria(22,45016606,5200,10);
echo $cuentaBancaria . "\n";
$cuentaBancaria->actualizarSaldo();
echo $cuentaBancaria . "\n";
$cuentaBancaria->depositar(1000);
echo $cuentaBancaria . "\n";
echo retirarDinero(200,$cuentaBancaria);
echo $cuentaBancaria . "\n";
echo retirarDinero(7000,$cuentaBancaria);
echo $cuentaBancaria . "\n";
function retirarDinero($cant,$cuenta){
    $resultado=$cuenta->retirar($cant);
    if($resultado==1){
        echo "Saldo Insuficiente. " ."\n";
    }
}
