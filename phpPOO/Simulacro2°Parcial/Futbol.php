<?php


class Futbol extends Partido{


    public function __construct($id,$date,$golesE1,$golesE2,$objE1,$objE2)
    {
        parent::__construct($id,$date,$golesE1,$golesE2,$objE1,$objE2);
    }


    /*Si se trata de un partido de fútbol, el coeficiente también tiene en cuenta la categoría de los jugadores del 
    equipo.
    A continuación se presenta una tabla en la que se detalla el incremento del coeficiente base si es un partido de
    fútbol, donde para cada tipo de categoría corresponden los siguientes valores:
    categoriaEquipos --> menores = 0.11 | juveniles = 0.17 | mayores = 0.23
    Es decir que coefFutbol = coef + coef*coefCat, donde coef es el coeficiente base y coefCat es el coeficiente
    indicado en la tabla de categoría.*/
    public function coeficientePartido()
    {
        $coef = parent::coeficientePartido();

        $idCategoriaE1 = $this->getObjE1()->getObjCategoria()->getIdCategoria();
        $idCategoriaE2 = $this->getObjE2()->getObjCategoria()->getIdCategoria();
        

         if (($idCategoriaE1 == 3) && ($idCategoriaE2 == 3)) 
        {
            $coefCat = 0.23;
            $coefFutbol = ($coef + ($coef * $coefCat) + ($coef * $coefCat));
        }
            if (($idCategoriaE1 == 2) && ($idCategoriaE2 == 2)) 
            {
                $coefCat = 0.17;
                $coefFutbol = ($coef + ($coef * 0.17) + ($coef * 0.17));
            }
             if (($idCategoriaE1  == 1) && ($idCategoriaE2 == 1)) 
            {
                $coefCat = 0.11;
                $coefFutbol = ($coef + ($coef * $coefCat) + ($coef * $coefCat));
            }
            
           

        return $coefFutbol;
        
    }


    public function __toString()
    {
        $cadena = "PARTIDO DE FUTBOL\n";
        $cadena .= parent::__toString();
      
        return $cadena;
    }

}