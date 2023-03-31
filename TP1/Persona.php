<?php
class Persona{
    private $nombre;
    private $edad;
    private $dni;
    private $localidad;

    public function __construct($nombre, $edad, $dni, $localidad){
        $this->nombrePersona=$nombre;
        $this->edadPersona=$edad;
        $this->dniPersona=$dni;
        $this->localidadPersona=$localidad;
    }

    public function getNombrePersona(){
        return $this->nombrePersona;
    }
    public function setNombrePersona($nombre){
        $this->nombrePersona=$nombre;
    }

    public function getEdadPersona(){
        return $this->edadPersona;
    }
    public function setEdadPersona($edad){
        $this->edadPersona=$edad;
    }

    public function getDniPersona(){
        return $this->dniPersona;
    }
    public function setDniPersona($dni){
        $this->getDniPersona=$dni;
    }
    public function getLocalidadPersona(){
        return $this->localidadPersona;
    }
    public function setLocalidadPersona($localidad){
        $this->localidadPersona=$localidad;
    }

    public function presentacion(){
        echo "Nombre: " . $this->getNombrePersona() . "\n" ;
        echo "Edad: " . $this->getEdadPersona() . "\n";
        echo "Dni: " . $this->getDniPersona() . "\n";
        echo "Localidad: " . $this->getLocalidadPersona() . "\n";
    }

    public function __toString(){
        return $this->getNombrePersona() . "," . $this->getEdadPersona() . "," . $this->getDniPersona() . "," . $this->getLocalidadPersona; 
    }
}