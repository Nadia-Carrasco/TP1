<?php
include "Cafetera.php";
//se crea el objeto cafetera
$cafetera= new Cafetera(50,20);
//se invocan los métodos de los atributos
echo $cafetera . "\n";
$cafetera->llenarCafetera();
echo "Cafetera Llena " . "\n" . $cafetera . "\n";
echo servirUnaTaza(5,$cafetera) . "\n";
echo $cafetera . "\n";
echo servirUnaTaza(47,$cafetera) . "\n";
echo $cafetera . "\n";
$cafetera->agregarCafe(30);
echo "Agregáste más café " . "\n" . $cafetera . "\n";
//echo $cafetera . "\n";
$cafetera->vaciarCafetera();
echo "Cafetera Vacía " . "\n" . $cafetera ;

function servirUnaTaza($cant,$cafetera){
    $resultado=$cafetera->servirTaza($cant);
    if($resultado==1){
        $mensaje= "No se alcanzó a llenar la taza. Falta Café";
    }else{
        $mensaje="Taza Servida";
    }
    return $mensaje;
}
