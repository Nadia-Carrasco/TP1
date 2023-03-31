<?php 
class CuentaBancaria{
    //se crean los atributos
    private $numCuenta;
    private $dniCliente;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numCuenta,$dniCliente,$saldoActual,$interesAnual){
        $this->numCuenta=$numCuenta;
        $this->dniCliente=$dniCliente;
        $this->saldoActual=$saldoActual;
        $this->interesAnual=$interesAnual; 
    }
    //se obtiene el valor del atributo numCuenta
    public function getNumCuenta(){
        return $this->numCuenta;
    }
    //setea el valor del atributo numCuenta
    public function setNumCuenta($numCuenta){
        $this->numCuenta=$numCuenta;
    }
    //se obtiene el valor del atributo dniCliente
    public function getDniCliente(){
        return $this->dniCliente;
    }
    //setea el valor del atributo dniCliente
    public function setDniCliente($dniCliente){
        $this->dniCliente=$dniCliente;
    }
    //se obtiene el valor del atributo saldoActual
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    //setea el valor del atributo saldoActual
    public function setSaldoActual($saldoActual){
        $this->saldoActual=$saldoActual;
    }
    //se obtiene el valor del atributo interesAnual
    public function getInteresAnual(){
        return $this->interesAnual;
    }
    //setea el valor del atributo interesAnual
    public function setInteresAnual($interesAnual){
        $this->interesAnual=$interesAnual;
    }
    //método para actualizar el saldo con un interes diario
    public function actualizarSaldo(){
        //se obtienen los valores de los atributos 
        $saldo=$this->getSaldoActual();
        $interes=$this->getInteresAnual();
        $interesActual=$interes/365;
        $nuevoSaldo=$saldo+$interesActual;
        $this->setSaldoActual($nuevoSaldo);
    }
    //método para depositar dinero a la cuenta
    public function depositar($cant){
        $saldo=$this->getSaldoActual();
        $nuevoSaldo=$saldo+$cant;
        $this->setSaldoActual($nuevoSaldo);
    }
    //método para retirar dinero de la cuenta
    public function retirar($cant){
        $saldo=$this->getSaldoActual();
        $n=0;
        if($saldo>$cant){
            $nuevoSaldo=$saldo-$cant;
            $this->setSaldoActual($nuevoSaldo);
        }else{
            $n=1;
        }
        return $n;
    }
    public function __toString(){
    return "Número de cuenta: " . $this->getNumCuenta() . "\n" . "DNI del Cliente: " . $this->getDniCliente() . "\n" . "Saldo Actual: " . $this->getSaldoActual() . "\n" . "Interés Anual: " . $this->getInteresAnual();
    }
}