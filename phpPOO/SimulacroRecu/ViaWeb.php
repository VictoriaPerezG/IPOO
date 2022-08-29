<?php

class ViaWeb extends Contrato{

    private $porcDesc;

    public function __construct($inicio,$venc,$objplan,$estado,$costo,$renueva,$cliente)
    {
        parent::__construct($inicio,$venc,$objplan,$estado,$costo,$renueva,$cliente);
        $this->porcDesc = 10;
    }

    public function getPorcDesc(){
        return $this->porcDesc;
    }
    public function setPorcDesc($porc){
        $this->porcDesc = $porc;
    }

    public function __toString()
    {
        $cadena  = "CONTRATO VIA WEB \n";
        $cadena .= parent :: __toString();
        $cadena .= "PORCENTAJE DESCUENTO: ".$this->getPorcDesc();
        return $cadena;
    }

    public function calcularImporte(){

        $importe = parent::calcularImporte();
        $porcentaje = $this->getPorcDesc();

        $porcentaje = (($porcentaje * $importe)/100);
        $importeDescuento = $importe - $porcentaje;
        $this->setCosto($importeDescuento);
        return $importeDescuento;

    }


}