<?php
/*implementar la clase Torneo que contiene la colección de partidos, el monto del premio y el nombre de
la localidad donde se va a jugar cada partido*/

class Torneo{

    private $id;
    private $colPartidos=[] ;
    private $premio;
    private $nomLocalidad;

    public function __construct($id,$array,$monto,$localidad)
    {
        $this->id = $id;
        $this->colPartidos = $array;
        $this->premio = $monto;
        $this->nomLocalidad = $localidad;

    }

    public function getColPartidos(){
        return $this->colPartidos;
    }
    public function setColPartidos($array){
        $this->colPartidos = $array;
    }

    public function getPremio(){
        return $this->premio;
    }
    public function setPremio($monto){
        $this->premio = $monto;
    }

    public function getLocalidad(){
        return $this->nomLocalidad;
    }
    public function setLocalidad($nombre){
        $this->colPartidos = $nombre;
    }

    public function getIdTorneo(){
        return $this->id;
    }
    public function setIdTorneo($id){
        $this->id = $id;
    }


    /*Implementar el método obtenerEquipoGanadorTorneo() en la clase Torneo que recorre la lista de
    partidos y se queda con aquel equipo que gano mas partidos. El método debe retornar un arreglo
    asociativo con el objeto de la clase Equipo (correspondiente al equipo ganador del torneo) y otra clave
    con la cantidad de goles realizados en todo el torneo. 
    Ayuda: Puede utilizar un arreglo asociativo donde
    almacene cada equipo, la cantidad de partidos ganados y los goles realizados por ese equipo. Luego
    retornar un arreglo asociativo que contenga la instancia del equipo, la cantidad de goles y partidos
    ganados.
    se devuelve una col de los equipos ganadores */
    public function obtenerEquipoGanadorTorneo(){

        $colPartidos = $this->getColPartidos();
        $colEquiposGanadores = [];

        foreach ($colPartidos as $partido) {
            $ganadorPart = $partido->darGanadorPart();//return array asociativo 

            if( $ganadorPart != null){
                $arrayAsociativo = array();
                $arrayAsociativo['objEquipo'] = $ganadorPart['objEquipo'];
                $arrayAsociativo['cantGoles'] = $ganadorPart['goles'];
                $arrayAsociativo['partGanados'] = 1; //valor por defecto 
                $this->incorporarEquipo ($colEquiposGanadores,$arrayAsociativo);
            
            }

        }

        return $colEquiposGanadores; 
    }

    /////////////////////////////////////////////////////////////////////////
    public function incorporarEquipo($colEquiposGanadores,$arrayAsociativo){

        foreach ($colEquiposGanadores as $arrayGanador) {

            $objEquipo = $arrayGanador['objEquipo'];//instancia de un obj equipo
            $nombreEquipo = $objEquipo->getNombre();

            $objEquipo2 = $arrayAsociativo['objEquipo'];//instancia de un obj equipo
            $nombreEquipo2 = $objEquipo2->getNombre();
            
            
            if ($nombreEquipo == $nombreEquipo2) {
                $cantgoles =  $arrayGanador['cantGoles'];
                //$arrayGanador['partGanados']
                $arrayAsociativo['cantGoles'] +=  $cantgoles;
                $arrayAsociativo['partGanados'] += 1;
               
            }
            if($nombreEquipo <> $nombreEquipo2){
                array_push($colEquiposGanadores,$arrayAsociativo);
            }
        }

        return $colEquiposGanadores;

    }


    /*Implementar el método obtenerPremioTorneo() en la clase Torneo que calcula el premio económico
    que debe ser otorgado al equipo ganador del Torneo Provincial o Nacional. El premio económico es
    otorgado al equipo que ha ganado mas partidos. Redefinir el método
    cuando lo considere necesario e invoque al método del punto 4 para obtener el equipo ganador y su
    información.*/  
    public function obtenerPremioTorneo(){

        $monto = $this->getPremio();
        $EGanador = $this->obtenerEquipoGanadorTorneo();
        $cantPartGanados = $EGanador["partGanados"];
        $equipo = $EGanador["equipo"];

        if($cantPartGanados >= 1){
            $arrayAsociativo = ["equipo" => $equipo, "monto"=>$monto];
        }

        return $arrayAsociativo;
    }


    public function __toString()
    {
        $cadena = "ID Torneo: " .$this->getIdTorneo()."\n";
        $cadena .= "Localidad: " . $this->getLocalidad()."\n";
        $cadena .= "Premio: " . $this->getPremio()."\n";
        $cadena .= "Torneos:\n " .print_r($this->getColPartidos(),true) ."\n";
        return $cadena;

    }
}