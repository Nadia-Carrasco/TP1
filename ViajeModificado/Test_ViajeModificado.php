<?php 
include("Viaje.php");
function menu(){
    echo "1. Mostrar Datos Pasajeros: "."\n"."2. Mostrar Datos del Viaje"."\n"."3. Modificar Pasajero "."\n"."4. Modificar Viaje"."\n"."5. Salir"."\n";
    $opcion=trim(fgets(STDIN));
    return $opcion;
}

$colPasajeros[0]=["nombre"=>"Luis", "apellido"=>"Lopez", "dni"=>450016478];
$colPasajeros[1]=["nombre"=>"Pedro", "apellido"=>"Perez", "dni"=>450016647];
$colPasajeros[2]=["nombre"=>"Esteban", "apellido"=>"Muñoz", "dni"=>474446647];
$objViaje=new Viaje(154,"colombia",20,$colPasajeros);
$opcion=menu();
do{
    switch($opcion){
        case 1:
            echo $objViaje->mostrarDatosPasajeros();
            $opcion=menu();
            break;
        case 2:
            echo $objViaje;
            $opcion=menu();
            break;
        case 3:
            echo "Ingrese Número de Documento del pasajero que desee modificar: ";
            $numBuscar=trim(fgets(STDIN));
            echo "Nombre Nuevo Pasajero: ";
            $nuevoNombrePas=trim(fgets(STDIN));
            echo "Apellido Nuevo Pasajero: ";
            $nuevoApellidoPas=trim(fgets(STDIN));
            echo "Número de Documento Nuevo Pasajero: ";
            $nuevoDocuPas=trim(fgets(STDIN));
            $result=$objViaje->modificarPasajero($nuevoDocuPas,$nuevoNombrePas,$nuevoApellidoPas,$numBuscar);
            if($result){
                echo "Pasajero Modificado"."\n";
            }else{
                echo "Error. No se encontró pasajero para Modificar "."\n";
            }
            $opcion=menu();
            break;
        case 4:
            echo "Nuevo Código de Viaje: ";
            $codigoNuevo=trim(fgets(STDIN));
            echo "Nuevo Destino: ";
            $destinoNuevo=trim(fgets(STDIN));
            echo "Nueva Cantidad Máxima de Pasajeros: ";
            $cantMaxPasNueva=trim(fgets(STDIN));
            $objViaje->modificarViaje($codigoNuevo,$destinoNuevo,$cantMaxPasNueva);
            echo $objViaje."\n";
            $opcion=menu();
            break;
    }
}while($opcion!=5);