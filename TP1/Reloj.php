<?php
class Reloj{ 
private $hora;
private $minutos;
private $segundos; 

public function __construct($hora, $minutos,$segundos){
    $this->horas=$hora;
    $this->min=$minutos;
    $this->seg=$segundos;
}

//retorna el valor de horas
public function getHoras(){
   return $this->horas;
}
//setea el valor de horas
public function setHoras($hora){
    $this->horas=$hora;
}
//retorna el valor de min
public function getMin(){
   return $this->min;
}
//setea el valor de min
public function setMin($minutos){
    $this->min=$minutos;
}

//retorna el valor de seg
public function getSeg(){
   return $this->seg;
}
//setea el valor de seg
public function setSeg($segundos){
    $this->seg=$segundos;
}

public function __toString(){
    return "Hora: " . $this->getHoras() . ":" . $this->getMin() . ":" . $this->getSeg();
}
//Método que deja en 0 a los atributos
public function puesta_a_cero(){
    $this->setHoras(0);
    $this->setMin(0);
    $this->setSeg(0);
}
/**incrementa las horas minutos y segundos
 * cuando el cronometro llega a 23:59:59 pasa a 00:00:00
 */
public function incrementar(){
    //Obtengo los valores de los atributos 
    $vhora=$this->getHoras();
    $vmin=$this->getMin();
    $vseg=$this->getSeg();
    //Aumento el segundo
    $vseg++;
    if($vseg<=59){
        $this->setSeg($vseg);
    }else{ //es mayor a 59
        $this->setSeg(0);
        $vmin++;
        if ($vmin<=59){
            $this->setMin($vmin);
        }else{
            $this->setMin(0);
            $vhora++;
            if($vhora<=23){
                $this->setHoras($vhora);
            }else{
                $this->setHoras(0);
            }
        }
    }
}

}