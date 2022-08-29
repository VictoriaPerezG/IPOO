<?php

/*De los planes se almacena un código, canales, importe y si incluye MG de datos o no. Por defecto se asume que
el plan incluye 50 MG.*/

class Planes{
    private $codigo;
    private $colCanales = [];
    private $importe;
    private $datosMG;

    public function __construct($id,$canales,$importe)
    {
        $this->codigo = $id;
        $this->colCanales = $canales;
        $this->importe = $importe;
        $this->datosMG = 50;
    }

    public function getColCanales(){
        return $this->colCanales;
    }
    public function setColCanales($canales){
        $this->colCanales = $canales;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($id){
        $this->codigo = $id;
    }

    public function getImporte(){
        return $this->importe;
    }
    public function setImporte($importe){
        $this->importe = $importe;
    }

    public function getDatosMG(){
        return $this->datosMG;
    }
    public function setDatosMG($datos){
        $this->datosMG = $datos;
    }

    
    public function __toString()
    {
        return "PLANES \n". 
                "CODIGO: ".$this->getCodigo()."\n".
                print_r($this->getColCanales(),true)."\n". 
                "IMPORTE: ".$this->getImporte()."\n". 
                "DATOS MG: ".$this->getDatosMG()."\n"; 

    } 

}