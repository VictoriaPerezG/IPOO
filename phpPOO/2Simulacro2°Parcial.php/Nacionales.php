<?php

class Nacionales extends Torneo{

    public function __construct($id,$array,$monto,$localidad)
    {
        parent::__construct($id,$array,$monto,$localidad);
     
    }

//y si se trata de un torneo Nacional al premio económico se adiciona el 10% del monto del premio por la cantidad de partidos ganados
    public function obtenerPremioTorneo()
    {
        $arrayAsociativo = parent::obtenerPremioTorneo();
        $monto = $arrayAsociativo["monto"];
        $partGanados = $arrayAsociativo["partGanados"];

        $porcentaje =  ((10 * $monto) / 100);
        $montoFinal = (($porcentaje + $monto) * $partGanados);

        $arrayAsociativo["monto"] = $montoFinal;

        return $arrayAsociativo;

    }

    public function __toString()
    {
        $cadena = "TORENO NACIONAL \n";
        $cadena .= parent::__toString();
        return $cadena;
    }
}