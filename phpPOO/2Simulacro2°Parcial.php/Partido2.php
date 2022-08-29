<?php


class Partido {

    //atributos de clase partido
    private $idPartido;
    private $fecha;
    private $cantGolesE1;
    private $cantGolesE2;
    private $arrayEquipos;

    //metodo constructor de la clase partido
    public function __construct($id,$date,$golesE1,$golesE2,$objE1,$objE2)
    {
        $this->idPartido = $id;
        $this->fecha = $date;
        $this->cantGolesE1 = $golesE1;
        $this->cantGolesE2 = $golesE2;
        $this->arrayEquipos[] = $objE1;
        $this->arrayEquipos[] = $objE2;
    }

    //metodos de acceso de la clase partido
    public function getIdPartido(){
        return $this->idPartido;
    }
    public function setIdPartido($id){
        $this->idPartido=$id;
    }

    public function getFecha(){
        return $this->fecha;
    }
    public function setFecha($date){
        $this->fecha=$date;
    }

    public function getCantGolesE1(){
        return $this->cantGolesE1;
    }
    public function setCantGolesE1($cantidad){
        $this->cantGolesE1 = $cantidad;
    }

    public function getCantGolesE2(){
        return $this->cantGolesE2;
    }
    public function setCantGolesE2($cantidad){
        $this->cantGolesE2 = $cantidad;
    }

    /*
    public function getObjE1()
    {
        return $this->objE1;
     }
    public function setObjE1($obj){
        $this->objE1 = $obj;
     }

    public function getObjE2(){
        return $this->objE2;
     }
    public function setObjE2($obj){
        $this->objE2 = $obj;
    }
    */

    public function getArrayEquipos(){
        return $this->arrayEquipos;
    }
    public function setArrayEquipos($array){
        $this->arrayEquipos = $array;
    }

    //implemento yo una funcion de un metodo que retorna el ganador del partido con la inst obj y la cant de goles
    public function darGanadorPart(){
        $arrayGanador = null;
        $golesE1 = $this->getCantGolesE1();
        $golesE2 = $this->getCantGolesE2();

        if( $golesE1 > $golesE2){
            $arrayGanador = array();
            $arrayGanador ['equipo'] = $this->getArrayEquipos()[0] ;
            $arrayGanador ['goles'] = $this->getCantGolesE1();
        }
        else{
            $arrayGanador = array();
            $arrayGanador ['objEquipo'] = $this->getArrayEquipos()[1] ;
            $arrayGanador ['goles'] = $this->getCantGolesE2();
        }

        return $arrayGanador;

    }

    //metodo to string de la clase partido
    public function __toString()
    { 
        return      "ID PARTIDO: ". $this->getIdPartido()."\n". 
                    "FECHA DEL PARTIDO: ". $this->getFecha()."\n". 
                    "GOLES E1: ". $this->getCantGolesE1()."\n". 
                    "GOLES E2: ". $this->getCantGolesE2()."\n".
                    "\nEQUIPO 1: ". $this->getObjE1()."\n".
                    "EQUIPO 2: ". $this->getObjE2()."\n";
       
    }



}