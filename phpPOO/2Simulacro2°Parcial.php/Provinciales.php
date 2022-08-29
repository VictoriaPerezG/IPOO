<?php

class Provinciales extends Torneo{

    private $nomProvincia;

    public function __construct($id,$array,$monto,$localidad,$provincia)
    {
        parent::__construct($id,$array,$monto,$localidad);
        $this->nomProvincia = $provincia;
    }

    public function getProvincia(){
        return $this->nomProvincia;
    }
    public function setProvincia($nombre){
        $this->nomProvincia = $nombre;
    }

    public function __toString()
    {
        $cadena = "TORENO PROVINCIAL \n";
        $cadena .= parent::__toString();
        $cadena .= "Provincia: ".$this->getProvincia()."\n";
        return $cadena;
    }
}