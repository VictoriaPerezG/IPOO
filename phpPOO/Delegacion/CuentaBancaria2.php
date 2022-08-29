<?php

//Nueva clase cuenta bancaria para modificarla y usar herencia 

class CuentaBancaria{

    private $nroCuenta;
    private $objPersona;
    private $saldoAct;
    private $intActual;
    

    public function __construct($numCuenta,$objPersona,$saldoActual,$interesActual)
    {
        $this-> nroCuenta = $numCuenta;
        $this-> objPersona = $objPersona;
        $this-> saldoAct = $saldoActual;
        $this-> intActual = $interesActual;

        
    }

    public function getNumCuenta(){
        return $this-> nroCuenta;
    }
    public function setNumCuenta($numero){
        $this-> nroCuenta = $numero;
    }

    public function getObjPersona(){
        return $this-> objPersona;
    }
    public function setObjPersona($obj){
        $this-> objPersona = $obj;
    }

    public function getSaldo(){
        return $this-> saldoAct;
    }
    public function setSaldo($numero){
        $this-> saldoAct = $numero;
    }

    public function getInteres(){
        return $this-> intActual;
    }
    public function setInteres($numero){
        $this-> intActual = $numero;
    }


/*c) actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual dividido
entre 365 aplicado al saldo actual).*/


    public function actualizarSaldo(){
       
        
        $interesDiario= $this->getSaldo()*($this->getInteres() / 365);
        $saldoNuevo= $this->getSaldo() - $interesDiario;
        $this->setSaldo($saldoNuevo);
        return $saldoNuevo;

    }

/*d) depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta.*/

    public function depositar($cant){
       
        $saldo=$this->getSaldo()+$cant;
        $this->setSaldo($saldo);
        return $saldo;
    }

/*e) retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).*/

    public function retirar($cant)
    {
        $saldo=$this->getSaldo();
        
        if(($saldo>0) && ($cant<=$saldo))
        {
            $sacar=$this->getSaldo()-$cant;
            $this->setSaldo($sacar);
        }
        else
        {
            $sacar=false;
        }

        return $sacar;
    }

/*f) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.*/

    public function __toString()
    {
        $dni=$this->getObjPersona();

        return 
                "El nro de cuenta es:". $this->getNumCuenta() ."\n".
                "El DNI del cliente es:". $dni->getNumero() ."\n".
                "El saldo actual es de:". $this->getSaldo() ."\n".
                "El interes anual es del:". $this->getInteres() ."\n";




    }

}
