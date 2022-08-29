<?php 

/*1. Defina e implemente una clase Cliente que hereda de la clase Persona (DNI, Nombre y Apellido) con la
información básica de un cliente (Nro. de Cliente, DNI, Nombre y Apellido).*/

class Cliente  extends Persona {

    //atriutos de la clase cliente
    private $nroCliente;

    //metodo contructor de la clase cliente
    public function __construct($num,$dni,$nom,$ape)
    {
        //invocamos al metodo contructor de la clase padre PersonaH
        parent::__construct($dni,$nom,$ape);
        $this->nroCliente=$num;
    }

    //metodos de acceso de la clase cliente
    public function getNroCliente(){
        return $this->nroCliente;
    }
    public function setNroCliente($num){
        $this->nroCliente= $num;
    }

    //metodo to string de la clase cliente 
    public function __toString()
    {
        $cadena = "\n Nro Cliente: " .$this->getNroCliente()."\n";
        $cadena.= parent::__toString();
        return $cadena;
    }
}