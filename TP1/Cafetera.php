<?php 
class Cafetera{
    private $capacidadMaxima;
    private $cantidadActual;
    //se crean los objetos capacidadMaxima y cantidadActual
    public function __construct($capacidadMaxima,$cantidadActual){
        $this->capMax=$capacidadMaxima;
        $this->cantActual=$cantidadActual;
    }
    //obtiene el valor de la capacidad maxima
    public function getCapMax(){
        return $this->capMax;
    }
    //setea el valor de la capacidad maxima
    public function setCapMax($capacidadMaxima){
        $this->capMax=$capacidadMaxima;
    }
    //obtiene el valor de la cantidad actual
    public function getCantActual(){
        return $this->cantActual;
    }
    //setea el valor de la cantidad actual
    public function setCantActual($cantidadActual){
        $this->cantActual=$cantidadActual;
    }
    //Método para llenar la cafetera
    public function llenarCafetera(){
        //Obtengo los valores de los atributos
        $capacidad=$this->getCapMax();
        $cantidad=$this->getCantActual();
        if($cantidad!=$capacidad){
            do{
                $cantidad++;
            }while($cantidad!=$capacidad);
        }
       $this->setCantActual($cantidad);
    }
    //Método para servir una taaza de cafe con una cap indicada
    public function servirTaza($capIndicada){
        $n=0;
        $cantActual=$this->getCantActual();
        if($cantActual<$capIndicada){
            $this->setCantActual(0);
           $n=1;
        }else{
            $cantNueva=$cantActual-$capIndicada;
            $this->setCantActual($cantNueva);
        }
        return $n;
    }
    //Método para vaciar la cafetera
    public function vaciarCafetera(){
        $this->setCantActual(0);
    }
    //Método para agregar una cantidad indicada de cafe a la cafetera
    public function agregarCafe($cant){
        $cafeActual=$this->getCantActual();
        $cantNuevaCafe=$cafeActual+$cant;
        $this->setCantActual($cantNuevaCafe);
    }
    //Visualiza los valores de los atributos
    public function __toString(){
        return "Capacidad Maxima: " . $this->getCapMax() . "\n" . "Cantidad Actual: " . $this->getCantActual();
    }
}