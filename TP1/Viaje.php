<?php
class Viaje{
    private $viaje;
    private $pasajero;

    public function __construct($codigo,$destino,$cantMaxPersona){
        $this->viaje=["codigo" => $codigo, "destino" => $destino, "cantMaxPersona"=>$cantMaxPersona, $this->pasajero=["pasajeros"=>[]]];
    }

    public function getViaje(){
        return $this->viaje;
    }
    public function getCodigo(){
        return $this->viaje["codigo"];
    }
    Public function getDestino(){
        return $this->viaje["destino"];
    }
    public function getCantMaxPersonas(){
        return $this->viaje["cantMaxPersona"];
    } 
    public function setViaje($codigo,$destino,$cantMaxPersona){
        $this->viaje["codigo"]=$codigo;
        $this->viaje["destino"]=$destino;
        $this->viaje["canMaxPersona"]=$cantMaxPersona;
    }
    public function setCodigo($codigo){
        $this->viaje["codigo"]=$codigo;
    }
    public function setDestino($destino){
        $this->viaje["destino"]=$destino;
    }
    public function setCantMaxPersona($cantMaxPersona){
        $this->viaje["cantMaxPersona"]=$cantMaxPersona;
    }
    public function getPasajero(){
        return $this->pasajero;
    }
    public function setPasajero($i,$nombre,$apellido,$dni){
        $this->pasajero[$i-1]["pasajeros"]= ["nombre"=>$nombre, "apellido"=>$apellido, "documento"=>$dni];
    }
    public function getNombre($i){
        return $this->pasajero[$i]["pasajeros"]["nombre"];
    }
    public function getApellido($i){
        return $this->pasajero[$i]["pasajeros"]["apellido"];
    }
    public function getDni($i){
        return $this->pasajero[$i]["pasajeros"]["documento"];
    }
    public function setNombre($i,$nombre){
        $this->pasajero[$i-1]["pasajeros"]["nombre"]=$nombre;
    }
    public function setApellido($i,$apellido){
        $this->pasajero[$i-1]["pasajeros"]["apellido"]=$apellido;
    }
    public function setDni($i,$dni){
        $this->pasajero[$i-1]["pasajeros"]["documento"]=$dni;
    }
    public function __toString(){
        return "Código: " . $this->getCodigo() . "\n" . "Destino: " . $this->getDestino() . "\n" . "Cantidad Max de Pasajeros: " . $this->getCantMaxPersonas() . "\n";
    }


}