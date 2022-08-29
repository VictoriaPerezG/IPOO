<?php

class MinisterioDeporte{

    private $anio;
    private $colTorneos = [];

    public function __construct($anio,$colTorneos)
    {
        $this->anio = $anio;
        $this->colTorneos = $colTorneos;
    }

    public function getAnio(){
        return $this->anio;
    }
    public function setAnio($anio){
        $this->anio = $anio;
    }

    public function setColTorneos($col){
        $this->colTorneos = $col;
    }
    public function getColTorneos(){
        return $this->colTorneos;
    }

    /*6. Implementar el método registrarTorneo($ColPartidos,$tipo,$ArrayAsociativo) en la clase
    MinisterioDeporte que recibe la colección de partidos que se van a jugar en el torneo, el tipo que indica si
    es nacional o provincial y un arreglo asociativo cuyas claves van a coincidir con la info necesaria para
    crear el torneo dependiendo su tipo. El método debe retornar la instancia de la clase Torneo creada
    según corresponda.*/
    public function  registrarTorneo($ColPartidos,$tipo,$ArrayAsociativo){

        $arrayTorneos = $this->getColTorneos();
        $i = count($arrayTorneos);
        $torneo = null;

        if($tipo == "nacional"){
            $torneo = new Nacionales($ArrayAsociativo["id"],$ColPartidos,$ArrayAsociativo["monto"],$ArrayAsociativo["localidad"]);
            $arrayTorneos[$i] = $torneo;
            $this->setColTorneos($arrayTorneos);
        }
        if($tipo == "provincial"){
            $torneo = new Provinciales($ArrayAsociativo["id"],$ColPartidos,$ArrayAsociativo["monto"],$ArrayAsociativo["localidad"],$ArrayAsociativo["provincia"]);
            $arrayTorneos[$i] = $torneo;
            $this->setColTorneos($arrayTorneos);
        }

        return $torneo;
    }


    /*7. Implementar el método otorgarPremioTorneo($idTorneo) en la clase MinisterioDeporte el cual debe
    retornar el objeto del equipo ganador y el importe correspondiente a su premio. Para la implementación
    del método debe invocar a/los métodos implementados*/
    public function otorgarPremioTorneo($idTorneo,$class){
        $colTorneos = $this->getColTorneos();
        $i=0;
        $torneo = false;

        while ( $i < $idTorneo && !$torneo) { 
            $torneo = $colTorneos[$i] ;
            $torneo = ($torneo->getIdTorneo() ==  $idTorneo);
            $i++;
        }

        foreach($colTorneos as $torneo){
        if(is_a($torneo,$class)){
            if ($class == "nacional") {
                $torneo['premio']=$torneo ->obtenerPremioTorneo();
                $torneo['objTorneo'] = $torneo;
            }
            if ($class == "provincial") {
                $torneo['premio']=$torneo ->obtenerPremioTorneo();
                $torneo['objTorneo'] = $torneo;
            }    
        }
        }

        return $torneo;

    }

    public function __toString()
    {
        $cadena = "Año del Torneo: ". $this->getAnio()."\n";
        $cadena .= "Coleccion de torneos: \n".print_r($this->getColTorneos(),true)."\n";
        return $cadena;
    }
}