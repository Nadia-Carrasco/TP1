<?php
class Viaje{
    private $codigo;
    private $destino;
    private $cantMaxPersona;
    private $pasajeros;

    public function __construct($codigo,$destino,$cantMaxPersona,$pasajeros){
        $this->codigo=$codigo;
        $this->destino=$destino;
        $this->cantMaxPersona=$cantMaxPersona;
        $this->pasajeros=$pasajeros;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    Public function getDestino(){
        return $this->destino;
    }
    public function setDestino($destino){
        $this->destino=$destino;
    }
    public function getCantMaxPersona(){
        return $this->cantMaxPersona;
    } 
    public function setCantMaxPersona($cantMaxPersona){
        $this->cantMaxPersona=$cantMaxPersona;
    }
    public function getPasajeros(){
        return $this->pasajeros;
    }
    public function setPasajeros($pasajeros){
        $this->pasajero=$pasajeros;
    }
   
    public function __toString(){
        return "Código: " . $this->getCodigo() . "\n" . "Destino: " . $this->getDestino() . "\n" . "Cantidad Max de Pasajeros: " . $this->getCantMaxPersona() . "\n"."Lista de Pasajeros: "."\n".$this->mostrarDatosPasajeros()."\n";
    }

    public function mostrarDatosPasajeros(){
        $colPasajeros=$this->getPasajeros();
        $cadena="";
        for($i=0; $i<count($colPasajeros); $i++){
            $nombre=$colPasajeros[$i]["nombre"];
            $apellido=$colPasajeros[$i]["apellido"];
            $dni=$colPasajeros[$i]["dni"];
            $cadena=$cadena."Pasajero:"." ". $nombre." ".$apellido." ".$dni."\n";
        }
        return $cadena;
    }

    public function buscarPasajero($dni){
        $colPasajeros=$this->getPasajeros();
        $i=0;
        $encontro=false;
        while($i<count($colPasajeros) && !$encontro){
             $encontro=$colPasajeros[$i]["dni"]==$dni;
            $i++;
        }
        if($i==count($colPasajeros)){
            $i=-1;
        }
        return $i-1; //devuelve el indice
    }

    
    public function modificarPasajero($dni,$nombre,$apellido,$dniBuscar){
       $indice=$this->buscarPasajero($dniBuscar);
        $modifico=false;
        if($indice>=0){
            $colPasajeros=$this->getPasajeros();
            $colPasajeros[$indice]=["nombre"=>$nombre, "apellido"=>$apellido, "dni"=>$dni];
            //print_r($colPasajeros);
            $modifico=true;
        }
        return $modifico;
    }
   

    public function modificarViaje($codigo,$destino,$cantMaxPas){
       $this->setCodigo($codigo);
       $this->setDestino($destino);
       $this->setCantMaxPersona($cantMaxPas);
    }
}