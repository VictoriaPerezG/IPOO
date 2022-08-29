<?php 

include "PersonaH.php";

//clase que representa a un alumno fai
class AlumnoFai extends Persona{

    private $legajo;

    //metodo contructor de la clase alumno fai
    public function __construct($videntificacion,$vnombre,$vapellido,$vlegajo)
    {
        //invocamos al contructor de persona
        parent::__construct($videntificacion,$vnombre,$vapellido);
            //agregamos el nuevo atributo
            $this->legajo =$vlegajo;
    }

    //metodo de acesso de la clase alumno fai
    public function getLegajo (){
        return $this->legajo;
    }
    public function setLegajo($vlegajo){
       $this->legajo=$vlegajo;
    }

    //metodo to string de la clase alumno fai
    public function __toString()
    {
        $cadena = parent::__toString(); 
        $cadena.="\n Legajo: ".$this->getLegajo();
        return $cadena;       
    }
}