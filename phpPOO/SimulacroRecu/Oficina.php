<?php

class Oficina extends Contrato{

    public function __construct($inicio,$venc,$objplan,$estado,$costo,$renueva,$cliente){
        parent :: __construct($inicio,$venc,$objplan,$estado,$costo,$renueva,$cliente);
    }

    public function __toString()
    {
        $cadena = "CONTRATO OFICINA \n";
        $cadena .=  parent::__toString();
        return $cadena;
    }
}