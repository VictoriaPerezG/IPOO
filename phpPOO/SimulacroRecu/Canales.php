<?php

class Canales{
    private $tipoCanal;
    private $importe;
    private $hd;
    

    public function __construct($tcanal,$importe,$hd)
    {
        $this-> tipoCanal = $tcanal;
        $this-> importe = $importe;
        $this-> hd = $hd;
    }


    public function getTipoCanal(){
        return $this->tipoCanal;
    }
    public function setTipoCanal($tipo){
        $this->tipoCanal = $tipo;
    }

    public function getImporte(){
        return $this->importe;
    }
    public function setImporte($importe){
        $this->importe = $importe;
    }

    public function getHd(){
        return $this->hd;
    }
    public function setHd($hd){
        $this->hd = $hd;
    }
    
    
    public function __toString()
    {
        return "CANALES \n". 
                "TIPO CANAL: ".$this->getTipoCanal()."\n".
                "IMPORTE: ".$this->getImporte()."\n".
                "HD: ".$this->getHd()."\n";
    }
}