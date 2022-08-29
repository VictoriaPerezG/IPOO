<?php


class Partido {

    //atributos de clase partido
    private $idPartido;
    private $fecha;
    private $cantGolesE1;
    private $cantGolesE2;
    private $objE1;
    private $objE2;

    //metodo constructor de la clase partido
    public function __construct($id,$date,$golesE1,$golesE2,$objE1,$objE2)
    {
        $this->idPartido = $id;
        $this->fecha = $date;
        $this->cantGolesE1 = $golesE1;
        $this->cantGolesE2 = $golesE2;
        $this->objE1 = $objE1;
        $this->objE2 = $objE2;
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

    public function getObjE1(){
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


    /*En cada partido se calcula un coeficiente base que es de 0,5 que es aplicado a la cantidad de goles y a la
    cantidad de jugadores de cada equipo. Es decir:
    coef = 0,5 * cantG * cantJ donde cantG: es la cantidad de goles; cantJ: es la cantidad de jugadores.*/
    public function coeficientePartido(){

        //obtengo las variables necesarias para las operaciones 
        $cantJE1 = $this->getObjE1()->getCantJugadores();
        $cantJE2 = $this->getObjE2()->getCantJugadores();
        $cantGolesE1 = $this->getCantGolesE1();
        $cantGolesE2 = $this->getCantGolesE2();

        //implementacion de la profe
        $coef = 0.5 ;
        $coef = $coef * $cantGolesE1 * $cantJE1 ;
        $coef = $coef * $cantGolesE2 * $cantJE2 ;

        //implementacion mia
         /*
        $coefE1 = 0.5 * $cantGolesE1 * $cantJE1;
        $coefE2 = 0.5 * $cantGolesE2 * $cantJE2;
        $coef = $coefE1 * $coefE2;
     */ 
        return $coef;

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