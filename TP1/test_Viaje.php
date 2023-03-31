<?php 
include "Viaje.php";

function menu(){ 
    echo "Menú: " . "\n" . "1-Comenzar Viaje"."\n"."2-Ingresar datos de pasajeros"."\n"."3-Mostrar Datos del Viaje"."\n"."4-Modificar Datos Viaje". "\n". "5- Salir"."\n";
    $num=trim(fgets(STDIN));
    return $num;
}
function menuCambiarViaje(){
    echo "1-Cambiar Código"."\n"."2-Cambiar Destino"."\n"."3-Cambiar Cantidad máxima de pasajeros" ."\n" . "4-Salir" . "\n";
    $respuesta=trim(fgets(STDIN));
    return $respuesta;
}
$n=0;
$opcion=menu();
do{ 

    switch($opcion){
    case 1:
        //datos del viaje
        echo "Ingrese codigo del Viaje: ";
        $codigo=trim(fgets(STDIN));
        echo "Ingrese Destino: ";
        $destino=trim(fgets(STDIN));
        echo "Ingrese cantidad máxima de pasajeros: ";
        $cantPasajeros=trim(fgets(STDIN));
        $viajeNuevo=new Viaje($codigo,$destino,$cantPasajeros);
        $n=1;
        $opcion=menu();
        break;
    case 2:
        //ingresar datos de los pasajeros
        if($n>0){ 
            for($i=1; $i<=$cantPasajeros; $i++){ 
            echo "Pasajero= " . $i . "\n";
            echo "Nombre: ";
            $nombre=trim(fgets(STDIN));
            echo "Apellido: ";
            $apellido=trim(fgets(STDIN));
            echo "Documentación: ";
            $dni=(fgets(STDIN));
            $viajeNuevo->setPasajero($i,$nombre,$apellido,$dni);
            }
        print_r($viajeNuevo->getPasajero());
        $opcion=menu();
        }else{
            echo "Viaje No encontrado vuelva a la opcion 1. ";
            $opcion=menu();
        }

        break;
    case 3:
        //mostrar datos del viaje 
        if($n>0){
           echo $viajeNuevo; 
           $opcion=menu();
        }else{
            echo "Viaje No encontrado. Vuelva a la opcion 1." . "\n";
            $opcion=menu();
        }
        
        break;
    case 4:
        //Modificar datos viaje
        if($n>0){
            $respuesta=menuCambiarViaje();
            do{ 
                switch($respuesta){
                case 1:
                    echo "Ingrese Nuevo Codigo: ";
                    $codigo=trim(fgets(STDIN));
                    $viajeNuevo->setCodigo($codigo);
                    print_r($viajeNuevo->getViaje());
                    $respuesta=menuCambiarViaje();
                    break;
                case 2:
                    echo "Ingrese Nuevo Destino: ";
                    $destino=trim(fgets(STDIN));
                    $viajeNuevo->setDestino($destino);
                    print_r($viajeNuevo->getViaje());
                    $respuesta=menuCambiarViaje();
                    break;
                case 3:
                    echo "Ingrese Nueva Cantidad de Pasajeros: ";
                    $pasajeros=trim(fgets(STDIN));
                    $viajeNuevo->setCantMaxPersona($pasajeros);
                    print_r($viajeNuevo->getViaje());
                    $respuesta=menuCambiarViaje();
                    break;   
                } 
            }while($respuesta!=4);
            $opcion=menu();
        }else{
            echo "Viaje No encontrado. Vuelva a la opcion 1." . "\n";
            $opcion=menu();
        }
        break;
    
    }
}while($opcion!=5);