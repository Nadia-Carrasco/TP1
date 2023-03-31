<?php
class Login{
    private $nombreUsuario;
    private $contrasenia;
    private $frase;
    private $contraAlmacenada;

    public function __construct($nombreUsuario,$contrasenia,$frase){
        $this->usuario=$nombreUsuario;
        $this->contra=$contrasenia;
        $this->frase=$frase;
        $this->contraAlmacenada=[$contrasenia];
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($nombreUsuario){
        $this->usuario=$nombreUsuario;
    }
    public function getContra(){
        return $this->contra;
    }
    public function setContra($contrasenia){
        $this->contra=$contrasenia;
    }
    public function getFrase(){
        return $this->frase;
    }
    public function setFrase($frase){
        $this->frase=$frase;
    }
    public function getContraAlmacenada(){
        return $this->contraAlmacenada;
    }
    public function setContraAlmacenada($indice,$contraAlmacenada){
        $this->contraAlamcenada[$indice]=$contraAlmacenada;
    }
    //Método validar contra con las almacenadas
    public function validarContra($contrasenia){
        $resp=false;
       if($contrasenia==$this->getContra()){
            $resp=true;
       }
       return $resp;
    }
    //Método para cambiar la contraseña actual por una nueva
    public function cambiarContra($contra){
        $cant=count($this->contraAlmacenada);
        $i=0;
        $n=0;
        while($i<$cant && $this->contraAlmacenada[$i]!=$contra) {
            $i++;
        }
        if($i != $cant) {
            $n=1;
        }elseif($cant==4){
            $this->setContra($contra);
            for($i=0; $i<3; $i++){
               $this->contraAlmacenada[$i] = $this->contraAlmacenada[$i+1];
            }
            $this->contraAlmacenada[3] = $contra;
        } else{
            $this->setContra($contra);
            array_push($this->contraAlmacenada, $contra);
        }
        return $n;
    }
    
    public function recordar($nombreUsuario,$coleccion){
        $cant=count($coleccion);
        $i=0;
        while($i<$cant && $coleccion[$i]->getUsuario()!=$nombreUsuario){
            $i++;
        }
        if($i!=$cant){
            $frase= $coleccion[$i]->getFrase();
        }else{
            $frase="No se encontraron resultados";
        }
        return $frase;
    }
    public function __toString(){
        return "Nombre Usuario: " . $this->getUsuario() . "\n" . "Contraseña: " . $this->getContra() . "\n"."Frase: " . $this->getFrase() ."\n";
    }
}