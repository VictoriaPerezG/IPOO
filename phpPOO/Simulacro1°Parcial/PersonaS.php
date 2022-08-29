<?php

/*En la clase Persona:
1. Se registra la siguiente información: nombre, apellido, dni, direccion, mail, telefono y neto.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase*/


class Persona{

    private $nombre;
    private $apellido;
    private $dni;
    private $telefono;
    private $neto;
    private $direccion;
    private $mail;

    //metodo consturctor 
    public function __construct($nombre,$apellido,$dni,$direccion,$mail,$telefono,$neto)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->dni=$dni;
        $this->direccion=$direccion;
        $this->mail=$mail;
        $this->telefono=$telefono;
        $this->neto=$neto;

    }

    //metodos de acceso 
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

    public function setDni($numero){
        $this->dni=$numero;
    }
    public function getDni(){
        return $this->dni;
    }

    public function setTelefono($numero){
        $this->telefono=$numero;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    public function setMail($mail){
        $this->mail=$mail;
    }
    public function getMail(){
        return $this->mail;
    }

    public function setNeto($numero){
        $this->neto=$numero;
    }
    public function getNeto(){
        return $this->neto;
    }

    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function getDireccion(){
        return $this->direccion;
    }

    //metodo to string nombre, apellido, dni, direccion, mail, telefono y neto
    public function __toString()
    {
        return "NOMBRE:" . $this->getNombre()."\n".
                "APELLIDO: " .$this->getApellido()."\n".
                "DNI:" .$this->getDni()."\n".
                "DIRECCION:" .$this->getDireccion()."\n".
                "MAIL:" .$this->getMail()."\n".
                "TELEFONO:" .$this->getTelefono()."\n".
                "NETO:" .$this->getNeto()."\n";

    }


}