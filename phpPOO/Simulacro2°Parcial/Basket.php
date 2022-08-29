<?php


class Basket extends Partido{

    private $infracciones;

    public function __construct($id,$date,$golesE1,$golesE2,$objE1,$objE2,$infracciones)
    {
        parent::__construct($id,$date,$golesE1,$golesE2,$objE1,$objE2);
        $this->infracciones = $infracciones;
    }

    /*Si se trata de un partido de basquetbol se almacena la cantidad de infracciones de manera tal que al coeficiente
    base se debe restar 0,75 * la cantidad de infracciones.*/
    public function coeficientePartido()
    {
        $coef = parent::coeficientePartido();//coef base
        $infracciones = $this->getInfracciones();
        
        $coefBasket = ($coef - (0.75 * $infracciones)); 

        return $coefBasket;
        
    }

    public function getInfracciones(){
        return $this->infracciones;
    }
    public function setInfracciones($num){
        $this->infracciones = $num;
    }

    public function __toString()
    {
        $cadena = "PARTIDO DE BASKET\n";
        $cadena .= parent::__toString();
        $cadena .= "\nN° Infracciones: ".$this->getInfracciones();
        return $cadena;
    }

}