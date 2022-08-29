<?php

/*Nota: La Cuenta Corriente se distingue de una Caja de Ahorro porque su dueño puede girar en descubierto. Es
por ello que la clase Cuenta Corriente debe tener un atributo que determine el monto máximo para girar en
descubierto.*/

class CuentaCorriente extends Cuenta{

    //atributos de la clase cuenta corriente 
    private $montoMax;

    //metodo contructor de la clase padre cuenta mas el atributo de la clase cuenta corriente
    public function __construct($nroCuenta,$saldo,$objCliente,$monto)
    {
        parent:: __construct($nroCuenta,$saldo,$objCliente);
        $this->montoMax = $monto;
    } 

    //metodos de acesso de la clase cuenta corriente 
    public function getMontoMax(){
        return $this-> montoMax;
    }
    public function setMontoMax($monto){
        $this-> montoMax=$monto;
    }

    //metodo modificado del metodo retiro de dinero de la clase padre Cuenta 
    public function realizarRetiro($monto)
    {
        $saldo = parent::saldoCuenta();//saldo de la cuenta
        $montoMaximo = $this->getMontoMax();// monto maximo que se puede retirar 
        $saldoTotal= $saldo + $monto;
        $value=false;

        if($saldoTotal <= $montoMaximo){//si esta condicion se cumple se retira el dinero de la cuenta y se devuelve true
            parent::realizarRetiro($monto);
            $value=true;
        }

        return $value;
    }

    //metodo to string de la clase caja ahorro
    public function __toString()
    {
       
        $cadena= "Monto Maximo: ".$this->getMontoMax()."\n";
        $cadena.=parent::__toString();
        
        return "Cuenta Corriente \n ". $cadena;
    }
}