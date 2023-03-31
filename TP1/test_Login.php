<?php 
include "Login.php";
$login1=new Login("Nid123","abc123","dino dan");
$login2=new Login("Ni23","abc12","din dan");
$login3=new Login("Nid23","ab23","dino");
$login4=new Login("N23","abc3","din da");
$coleccionLogin=[];
array_push($coleccionLogin,$login1,$login2,$login3,$login4);
function recordarContrasenia($nombre,$coleccion){
    $cant=count($coleccion);
    for($i=0; $i<$cant-1; $i++){
        $fraseContra=$coleccion[$i]->recordar($nombre,$coleccion);
    }
    echo $fraseContra;
}


function cambiar($coleccion){
    echo "Ingrese contraseña Nueva: ";
    $contra=trim(fgets(STDIN));
    $cambioContra=$coleccion->cambiarContra($contra);
    while($cambioContra==1){
        echo "No válida. Ingrese contraseña Nueva: ";
        $contra=trim(fgets(STDIN));
        $cambioContra=$coleccion->cambiarContra($contra);
    }
    print_r($coleccion->getContraAlmacenada());
}
function validar($coleccion){
    echo "Ingrese Contraseña para Validar: ";
    $contra=trim(fgets(STDIN));
    $contraValida=$coleccion->validarContra($contra);
    if($contraValida){
        echo "Contraseña Válida." . "\n";
    }else{
        echo "Contraseña Inválida." . "\n";
    }

}
//ejemplos de muestra:
echo recordarContrasenia("Nid23",$coleccionLogin)."\n";
echo cambiar($login1);
echo $login1;
validar($login2);
echo $login2;



