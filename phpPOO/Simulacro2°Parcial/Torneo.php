<?php


class Torneo {

    private $colPartidos = [];
    private $premio;

    public function __construct($array,$importe)
    {   
        $this->colPartidos = $array;
        $this->premio = $importe;
    }
    
    //metodos de acceso
    public function getColPartidos(){
        return $this->colPartidos;
    }
    public function setColPartidos($array){
        $this->colPartidos = $array;
    }

    public function getPremio(){
        return $this->premio;
    }
    public function setPremio($cantidad){
        $this->premio = $cantidad;
    }

    /*3. Implementar el método ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo) en la clase
    Torneo el cual recibe por parámetro 2 equipos, la fecha en la que se realizará el partido y si se trata de
    un partido de futbol o basquetbol. El método debe crear y retornar una instancia de la clase Partido que
    corresponda y almacenarla en la colección. Se debe chequear que los 2 equipos tengan la misma
    categoría y cantidad de jugadores.
    Se asume que cuando se ingresa los partidos todavia no se jugaron, por lo que la cantidad de goles e infrecciones 
    son tomadas en 0*/
    public function ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo)
    {
        $catE1 = $OBJEquipo1 -> getObjCategoria() -> getIdCategoria();
        $catE2 = $OBJEquipo2 ->getObjCategoria() -> getIdCategoria();
        $cantJE1 = $OBJEquipo1 -> getCantJugadores();
        $cantJE2 = $OBJEquipo2 -> getCantJugadores();

        $idPartido = count($this->getColPartidos()) + 1;
        $colPartidos = $this->getColPartidos();
        $partido = null ;

        if (($catE1 == $catE2) && ($cantJE1 == $cantJE2)) 
        {
            if($tipo == "futbol")
            {
                $partido = new Futbol($idPartido,$fecha,0,0,$OBJEquipo1,$OBJEquipo2);
                $i = count($colPartidos);
                $colPartidos[$i] = $partido;
                $this->setColPartidos($colPartidos);
                
            }
            if($tipo == "basket")
            {
                $partido = new Basket($idPartido,$fecha,0,0,$OBJEquipo1,$OBJEquipo2,0);
                $i = count($colPartidos);
                $colPartidos[$i] = $partido;
                $this->setColPartidos($colPartidos);
            }
        }
        
        return $partido;   

    }

    /*Implementar el método darGanadores($deporte) en la clase Torneo que recibe por parámetro si se trata
    de un partido de futbol o de basquetbol y en base al parámetro busca entre esos partidos los equipos
    ganadores (equipo con mayor cantidad de goles). El método retorna una colección con los objetos de los
    equipos encontrados.*/
    public function darGanadores($deporte)
    {
        $colPartidos = $this-> getColPartidos();
        $colEquipos = [];

        foreach ($colPartidos as $partido) {
            if (is_a($partido,$deporte)) {
                if($partido->getCantGolesE1() > $partido->getCantGolesE2()){
                    $colEquipos[] = $partido->getObjE1();
                }
                if($partido->getCantGolesE1() < $partido->getCantGolesE2()){
                    $colEquipos[] = $partido ->getObjE2();
                }
                
            }
        }

        return $colEquipos;
    }

    /*Implementar el método calcularPremioPartido($OBJPartido) que debe retornar un arreglo asociativo
    donde una de sus claves es ‘equipoGanador’ y contiene la referencia al equipo ganador; y la otra clave
    es ‘premioPartido’ que contiene el valor obtenido del coeficiente del Partido por el importe configurado
    para el torneo.*/
    public function calcularPremioPartido($OBJPartido)
    {        
        $arrayGanadores = $this->darGanadores(get_class($OBJPartido));

        for ($i=0; $i < count($arrayGanadores) ; $i++) { 
            if ( ($arrayGanadores[$i] == $OBJPartido->getObjE1()) || ($arrayGanadores[$i] == $OBJPartido->getObjE2())) {
                $equipo = $arrayGanadores[$i];
            }
            
        }

        $arrayAsociativo["equipoGanador"] = $equipo;
        $arrayAsociativo["premioPartido"] = $OBJPartido->coeficientePartido() * $this->getPremio(); 

        return $arrayAsociativo;
    }



    //metodod to string de la clase 
    public function __toString()
    {
        return "Coleccion Partidos: ". print_r($this->getColPartidos(),true)."\n".
                "Importe Premio: ".$this->getPremio()."\n";
    }




}