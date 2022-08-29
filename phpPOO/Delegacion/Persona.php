<?php

/*. Implementar una clase Persona con los atributos: nombre, apellido, tipo y número de documento.
a) Defina en la clase los siguientes métodos:
1. Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
atributos de la clase.
2. Los métodos de acceso de cada uno de los atributos de la clase.
3. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
4. Crear un script Test_Persona que cree un objeto Persona e invoque a cada uno de los
métodos implementados.
b) Realizar las modificaciones necesarias en la clase CuentaBancaria (Ejercicio 14 del TP1) para que en
vez de contener como atributo el DNI del dueño de la cuenta tenga una referencia a las clase Persona.*/


class Persona{

    private $nombre;
    private $apellido;
    private $tipoDoc;
    private $numDoc;

    public function __construct($nombre,$apellido,$doc,$nroDoc)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->tipoDoc=$doc;
        $this->numDoc=$nroDoc;

    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function getApellido(){
        return $this->apellido;
    }

    public function setTipoDoc($tipo){
        $this->tipoDoc=$tipo;
    }
    public function getTipoDoc(){
        return $this->tipoDoc;
    }

    public function setNumero($numero){
        $this->numDoc=$numero;
    }
    public function getNumero(){
        return $this->numDoc;
    }

    public function __toString()
    {
        return "NOMBRE: {$this->getNombre()} 
                APELLIDO: {$this->getApellido()}
                TIPO DOCUMENTO: {$this->getTipoDoc()}
                NUMERO DOCUMENTO: {$this->getNumero()}";
    }


}