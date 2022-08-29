<?php

class Equipo{

    //atributos de clase equipo
    private $nombre;
    private $nombreCapitan;
    private $cantJugadores;
    private $objCategoria;

    //metodo constructor de la clase 
    public function __construct($nombreEquip,$nombreCap,$cantJug,$objCat)
    {
        $this->nombre = $nombreEquip;
        $this->nombreCapitan = $nombreCap;
        $this->cantJugadores = $cantJug;
        $this->objCategoria = $objCat;
    }

    //metodos de acceso
    public function getNombreEquipo(){
        return $this->nombre;
    }
    public function setNombreEquipo($nombre){
        $this->nombre = $nombre;
    }

    public function getNombreCapitan(){
        return $this->nombreCapitan;
    }
    public function setNombreCapitan($nombre){
        $this->nombreCapitan = $nombre;
    }

    public function getCantJugadores(){
        return $this->cantJugadores;
    }
    public function setCantJugadores($cantidad){
        $this->cantJugadores = $cantidad;
    }

    public function getObjCategoria(){
        return $this->objCategoria;
    }
    public function setObjCategoria($objCat){
        $this->objCategoria = $objCat;
    }


    //metodo to string de la clase
    public function __toString()
    {
        return "NOMBRE EQUIPO: ". $this->getNombreEquipo()."\n". 
               "NOMBRE CAPITAN: ". $this->getNombreCapitan()."\n". 
               "CANTIDAD JUGADORES: ". $this->getCantJugadores()."\n".
               "CATEGORIA: \n". $this->getObjCategoria();
    }


}