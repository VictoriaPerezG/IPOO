 <?php

//clase que representa a una persona
 class Persona{

    //atributos de la clase persona
     private $identificacion;
     private $nombre;
     private $apellido;

     //metodo constructor de la clase persona 
     public function __construct($videntificacion,$vnombre,$vapellido)
     {
         $this->identificacion = $videntificacion;
         $this->nombre = $vnombre;
         $this->apellido = $vapellido;
     }

     //metodos de acesso de la clase persona
     public function getIdentificacion ()
     {
         return $this->identificacion;
     }
     public function setIdentificacion($videntificacion){
        $this->identificacion=$videntificacion;
     }

     public function getNombre(){
        return $this->nombre;
     }
     public function setNombre($vnombre){
       $this->nombre=$vnombre;
     }

     public function getApellido (){
        return $this->apellido;
     }
     public function setApellido($vapellido){
       $this->apellido=$vapellido;
     }

     //metodo to string de la clase persona 
     public function __toString()
     {
         return "ID ".$this->getIdentificacion(). 
                "\n Nombre: ".$this->getNombre().
                "\n Apellido: ".$this->getApellido(); 

     }
 }