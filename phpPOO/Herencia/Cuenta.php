<?php

/*2. Defina e implemente una clase “Cuenta” que contenga la información de una cuenta de un banco y haga
referencia a su dueño. Tener en cuenta que las cuentas pueden ser de 2 tipos: Cuenta Corriente o Caja de
Ahorro.
Nota: La Cuenta Corriente se distingue de una Caja de Ahorro porque su dueño puede girar en descubierto. Es
por ello que la clase Cuenta Corriente debe tener un atributo que determine el monto máximo para girar en
descubierto.
Implementar los siguientes métodos en la clase:
1. saldoCuenta() : retorna el saldo de la cuenta.
2. realizarDeposito(monto): permite realizar un depósito a la cuenta una cantidad “monto” de dinero.
3. realizarRetiro(monto): permite realizar un retiro de la cuenta por una cantidad “monto” de dinero.*/

class Cuenta {

    //atributos de la clase cuenta 
    private $objCliente;
    private $nroCuenta;
    private $saldo;

    //metodo contructor de la clase cuenta
    public function __construct($nroCuenta,$saldo,$objCliente)
    {
        $this->nroCuenta=$nroCuenta;
        $this->saldo=$saldo;
        $this->objCliente=$objCliente;
    }
  
    //metodos de acceso de la clase cuenta 
    public function getNroCuenta(){
        return $this->nroCuenta;
    }
    public function setNroCuenta($num){
        $this->nroCuenta =$num;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($newSaldo){
        $this->saldo =$newSaldo;
    }

    public function getObjCliente(){
        return $this->objCliente;
    }
    public function setObjCliente($obj){
        $this->objCliente =$obj;
    }

    //1. saldoCuenta() : retorna el saldo de la cuenta.
    public function saldoCuenta(){
        return $this->getSaldo();
    }

    //2. realizarDeposito(monto): permite realizar un depósito a la cuenta una cantidad “monto” de dinero.
    public function realizarDeposito($monto){
        $saldo = $this->saldoCuenta();
        $newSaldo = $saldo + $monto;
        $this->setSaldo($newSaldo);        
    }

    //3. realizarRetiro(monto): permite realizar un retiro de la cuenta por una cantidad “monto” de dinero.
    public function realizarRetiro($monto){
        $saldo = $this->saldoCuenta();
        $newSaldo = $saldo - $monto;
        $this->setSaldo($newSaldo); 
    }

    //metodo to string de la clase Cuenta 
    public function __toString()
    {
        return  "Nro Cuenta: ".$this->getNroCuenta()."\n".
                "Saldo: ".$this->saldoCuenta()."\n".
                "Cliente: \n".$this->getObjCliente()."\n";

    }
}