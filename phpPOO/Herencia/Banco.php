<?php

/*3. Defina una clase Banco con las siguiente variables instancias:
- coleccionCuentaCorriente: variable que contiene una colección de instancias de la clase Cuentas
Corrientes.
- coleccionCajaAhorro: variable que contiene una colección de instancias de la clase Caja de Ahorro .
- ultimoValorCuentaAsignado: variable que contiene el ultimo valor asignado a una cuenta del banco.
- coleccionCliente: variable que contiene una colección de instancias de la clase Cliente

4. En la clase Banco defina e implemente los siguientes métodos:
- incorporarCliente(objCliente): permite agregar un nuevo cliente al Banco
- incorporarCuentaCorriente(numeroCliente): Agregar una nueva Cuenta a la colección de
cuentas, verificando que el cliente dueño de la cuenta es cliente del Banco.
- incorporarCajaAhorro(numeroCliente):Agregar una nueva Caja de Ahorro a la colección de cajas de
ahorro, verificando que el cliente dueño de la cuenta es cliente del Banco.
- realizarDeposito(numCuenta,monto): Dado un número de Cuenta y un monto, realizar depósito.
- realizarRetiro(numCuenta,monto): Dado un número de Cuenta y un monto, realizar retiro.
*/ 

class Banco{

    //variables instancias de la clase banco
    private $coleccionCuentaCorriente=[];//variable que contiene una colección de instancias de la clase Cuentas Corriente
    private $coleccionCajaAhorro=[];//variable que contiene una colección de instancias de la clase Caja de Ahorro 
    private $ultimoValorCuentaAsignado;//variable que contiene el ultimo valor asignado a una cuenta del banco.
    private $coleccionCliente=[];//variable que contiene una colección de instancias de la clase Cliente

    //metodo contructor de la clase banco 
    public function __construct($colCuentaCorriente,$colCajaAhorro,$ultimoValorCuentaAsignado,$colClientes)
    {
        $this->coleccionCuentaCorriente =$colCuentaCorriente;
        $this->coleccionCajaAhorro =$colCajaAhorro;
        $this->ultimoValorCuentaAsignado =$ultimoValorCuentaAsignado;
        $this->coleccionClientes =$colClientes;
        
    }

    //metodos de acceso de la clase banco
    public function getColeccionCuentaCorriente(){
        return $this->coleccionCuentaCorriente;
    }
    public function setColeccionCuentaCorriente($array){
        $this->coleccionCuentaCorriente =$array;
    }

    public function getColeccionCajaAhorro(){
        return $this->coleccionCajaAhorro;
    }
    public function setColeccionCajaAhorro($array){
        $this->coleccionCajaAhorro =$array;
    }

    public function getUltimoValorCuentaAsignado(){
        return $this->ultimoValorCuentaAsignado;
    }
    public function setUltimoValorCuentaAsignado($valor){
        $this->ultimoValorCuentaAsignado =$valor;
    }

    public function getColeccionClientes(){
        return $this->coleccionCliente;
    }
    public function setColeccionClientes($array){
        $this->coleccionCliente =$array;
    }

    //incorporarCliente(objCliente): permite agregar un nuevo cliente al Banco
    public function incorporarCliente($objCliente){
        
    }


    //metodo to string de la clase banco
    public function __toString()
    {

    }


}

