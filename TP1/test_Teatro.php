<?php 
include "Teatro.php";
$teatro=new Teatro("Bambú",139);
echo $teatro . "\n";

function cambiarFuncion($teatro){
    echo "Qué función desea cambiar? Ingrese: 1, 2, 3, o 4" . "\n";
    $nuevaFuncion=trim(fgets(STDIN));
    if($nuevaFuncion<=4){
        $numeroFuncion=$nuevaFuncion-1;  
        echo "Ingrese Nombre: ";
        $nombre=trim(fgets(STDIN));
        $funciones=$teatro->cambiarNombreFuncion($numeroFuncion,$nombre);
    }else{
        echo "Función NO encontrada. ";
    }
}

function cambiarPrecio($teatro){
    echo "Ingrese Número de la Función para CAMBIAR el precio: ";
    $funcion=trim(fgets(STDIN));
        if($funcion<=4){
            $numeroFuncion=$funcion-1;
            echo "Precio Nuevo: ";
            $precioNuevo=trim(fgets(STDIN)); 
            $precio=$teatro->cambiarPrecioFuncion($precioNuevo, $numeroFuncion);
        }else{
            echo "Error. Función no encontrada. ";
        }
}
cambiarFuncion($teatro);
cambiarPrecio($teatro);
$teatro->cambiarNombreTeatro("Gala");
$teatro->cambiarDireccion(125);
echo $teatro . "\n";

