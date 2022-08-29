<?php

//clase hija de clase pader cuenta donde no se puede sacar mas del dinero que se tiene 

class CajaAhorro extends Cuenta{

    //metodo contructor de la clase padre cuenta
    public function __construct($nroCuenta,$saldo,$objCliente)
    {
        parent:: __construct($nroCuenta,$saldo,$objCliente);
    } 

    //metodo modificado del metodo retiro de dinero de la clase padre Cuenta 
    public function realizarRetiro($monto)
    {
        $saldo = parent::saldoCuenta();
        $value=false;
        if($monto <= $saldo){
            parent::realizarRetiro($monto);
            $value=true;
         }
        return $value;
    }

    //metodo to string de la clase caja ahorro
    public function __toString()
    {
        return "Caja de Ahorro \n" . parent::__toString();
    }
}