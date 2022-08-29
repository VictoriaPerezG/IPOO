<?php
/*4. Crea una clase CuentaBancaria con los siguientes atributos: número de cuenta, el DNI del cliente, el
saldo actual y el interés anual que se aplica a la cuenta. Define en la clase los siguientes métodos:
a) Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos
de la clase.
b) Los método de acceso de cada uno de los atributos de la clase.
c) actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual dividido
entre 365 aplicado al saldo actual).
d) depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta.
e) retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).
f) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
g) Crear un script Test_CuentaBancaria que cree un objeto CuentaBancaria e invoque a cada uno
de los métodos implementados*/



class CuentaBancaria{

    private $nroCuenta;
    private $dniCliente;
    private $saldoAct;
    private $intActual;
    

    public function __construct($numCuenta,$dni,$saldoActual,$interesActual)
    {
        $this-> nroCuenta = $numCuenta;
        $this-> dniCliente = $dni;
        $this-> saldoAct = $saldoActual;
        $this-> intActual = $interesActual;

        
    }

    public function getNumCuenta(){
        return $this-> nroCuenta;
    }
    public function setNumCuenta($numero){
        $this-> nroCuenta = $numero;
    }

    public function getDni(){
        return $this-> dniCliente;
    }
    public function setDni($dni){
        $this-> dniCliente = $dni;
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
        
        return 
                "El nro de cuenta es:". $this->getNumCuenta() ."\n".
                "El DNI del cliente es:". $this->getDni() ."\n".
                "El saldo actual es de:". $this->getSaldo() ."\n".
                "El interes anual es del:". $this->getInteres() ."\n";




    }













}

