<?php

/*En la clase Responsable:
1. Se registra la siguiente información: nombre, apellido, Nro de Documento, direccion, mail y telefono.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método toString para que retorne la información de los atributos de la clase*/

class Responsable{

    //atributos de la clase 
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $direccion;
    private $mail;
    private $telefono;

    //metodo constructor de la clase responsable 
    public function __construct($nom,$ape,$dni,$dire,$mail,$tele){

        $this-> nombre= $nom;
        $this-> apellido= $ape;
        $this-> nroDocumento= $dni;
        $this-> direccion= $dire;
        $this-> mail= $mail;
        $this-> telefono= $tele;

    }


    //metodos de acceso
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function getDocumento(){
        return $this->nroDocumento;
    }
    public function setDocumento($numero){
        $this->nroDocumento=$numero;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }

    public function getMail(){
        return $this->mail;
    }
    public function setMail($mail){
        $this->mail=$mail;
    }

    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($numero){
        $this->telefono=$numero;
    }

    //metodo to String que retorna los valores de los atributos como una cadena de caracteres
    public function __toString(){

        return  "NOMBRE: ". $this->getNombre()."\n ". 
                "APELLIDO: ". $this->getApellido()."\n ".
                "DNI: ". $this->getDocumento()."\n ".
                "DIRECCION: ". $this->getDireccion()."\n ".
                "MAIL: ". $this->getMail()."\n ".
                "TELEFONO: ". $this->getTelefono()."\n ";

    }

}