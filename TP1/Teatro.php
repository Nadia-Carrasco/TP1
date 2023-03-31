<?php 
class Teatro{
    private $nombre;
    private $direccion;
    
    public function __construct($nombre,$direccion){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }

    public function funciones(){
        $funciones=[];
        $funcion1=["Nombre"=>"Opera", "Precio"=>1500];
        $funcion2=["Nombre"=>"Oblea", "Precio"=>1200];
        $funcion3=["Nombre"=>"Perla", "Precio"=>1600];
        $funcion4=["Nombre"=>"Rubí", "Precio"=>1300];
        array_push($funciones,$funcion1,$funcion2,$funcion3,$funcion4);
        return $funciones;
    }
    //Método para cambiar nombre de la funcion
    public function cambiarNombreFuncion($numFuncion,$nombre){
            $funciones=$this->funciones();
            $funciones[$numFuncion]["Nombre"]=$nombre;
            //print_r($funciones);
    }
    //Método para cambiar el precio de la funcion
    public function cambiarPrecioFuncion($precio,$numFuncion){
            $funciones=$this->funciones();
            $funciones[$numFuncion]["Precio"]=$precio;
            //print_r($funciones);
    }
    //Método para cambiar el nombre del teatro
    public function cambiarNombreTeatro($nombreNuevo){
        $this->setNombre($nombreNuevo);
    }
    //Método para cambiar la direccion del teatro
    public function cambiarDireccion($direcNueva){
        $this->setDireccion($direcNueva);
    }
    //COMENTARIO: se puede agregar un metodo más que pueda cambiar el nombre y el precio de una misma funcion. Lo mismo con el nombre y direc del teatro
    public function __toString(){
        return "Nombre Teatro: " . $this->getNombre() . "\n" . "Direccion: " . $this->getDireccion();
    }
}