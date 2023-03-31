<?php 
class Cuadrado{
    private $verticeA;
    private $verticeB;
    private $verticeC;
    private $verticeD;
    public function __construct($a1,$a2,$b1,$b2,$c1,$c2,$d1,$d2){
        $this->verticeA=["a1"=>$a1,"a2"=>$a2];
        $this->verticeB=["b1"=>$b1,"b2"=>$b2];
        $this->verticeC=["c1"=>$c1,"c2"=>$c2];
        $this->verticeD=["d1"=>$d1,"d2"=>$d2];
    }
    public function getVerticeA1(){
        return $this->verticeA["a1"];
    }
    public function getVerticeA2(){
        return $this->verticeA["a2"];
    }
    public function setVerticeA1($a1){
        $this->verticeA["a1"]=$a1;
    }
    public function setVerticeA2($a2){
        $this->verticeA["a2"]=$a2;
    }

    public function getVerticeB1(){
        return $this->verticeB["b1"];
    }
    public function getVerticeB2(){
        return $this->verticeB["b2"];
    }
    public function setVerticeB1($b1){
        $this->verticeB["b1"]=$b1;
    }
    public function setVerticeB2($b2){
        $this->verticeB["b2"]=$b2;
    }

    public function getVerticeC1(){
        return $this->verticeC["c1"];
    }
    public function getVerticeC2(){
        return $this->verticeC["c2"];
    }
    public function setVerticeC1($c1){
        $this->verticeC["c1"]=$c1;
    }
    public function setVerticeC2($c2){
        $this->verticeC["c2"]=$c2;
    }

    public function getVerticeD1(){
        return $this->verticeD["d1"];
    }
    public function getVerticeD2(){
        return $this->verticeD["d2"];
    }
    public function setVerticeD1($d1){
        $this->verticeD["d1"]=$d1;
    }
    public function setVerticeD2($d2){
        $this->verticeD["d2"]=$d2;
    }

    //Método que calcula el área del cuadrado
    public function area(){
        $verticeA1=$this->getVerticeA1();
        $verticeA2=$this->getVerticeA2();
        $verticeB1=$this->getVerticeB1();
        $verticeB2=$this->getVerticeB2();
        $aB=pow(($verticeA1-$verticeB1),2) + pow(($verticeA2-$verticeB2),2);
        $area=$aB*4;
        return $area;
    }
    //Método para desplazar el cuadrado hacia la derecha
    public function desplazar($d){
        $this->setVerticeA1($this->getVerticeA1()+$d);
        $this->setVerticeB1($this->getVerticeB1()+$d);
        $this->setVerticeC1($this->getVerticeC1()+$d);
        $this->setVerticeD1($this->getVerticeD1()+$d);
    }
    //Método para aumentar el tamaño del cuadrado
    public function aumentarTamanio($t){
        $this->setVerticeA2($this->getVerticeA2()+$t);
        $this->setVerticeB1($this->getVerticeB1()+$t);
        $this->setVerticeC2($this->getVerticeC2()-$t);
        $this->setVerticeD1($this->getVerticeD1()-$t);
    }

    public function __toString(){   
        return "A= (" . $this->getVerticeA1() . "," . $this->getVerticeA2() . ") B= (" . $this->getVerticeB1() . "," . $this->getVerticeB2() . 
        ") C= (" . $this->getVerticeC1() . "," . $this->getVerticeC2() . ") D= (" . $this->getVerticeD1() . "," . $this->getVerticeD2() . ")" . "\n";
    }
}