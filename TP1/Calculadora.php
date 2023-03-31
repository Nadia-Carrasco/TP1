<?php
class Calculadora{
    private $num1;
    private $num2;
  

    public function __construct($num1, $num2){
        $this->numA=$num1;
        $this->numB=$num2;
    }

    public function suma(){
        return $this->numA+$this->numB;
    }

    public function resta(){
        return $this->numA-$this->numB;
    }

    public function multiplicacion(){
        return $this->numA*$this->numB;
    }

    public function division(){
        return $this->numA/$this->numB;
    }

    public function getNumA(){
        return $this->numA;
    }

    public function getNumB(){
        return $this->numB;
    }
    public function setNumA($numA){
        $this->numA=$numA;
    }
    public function setNumB($numB){
        $this->numB=$numB;
    }

    public function __toString(){
        return $this->getNumA() . "," . $this->getNumB();
    }
}