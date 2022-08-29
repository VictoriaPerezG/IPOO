<?php

 class Cliente{
     private $identificacion;
     private $nombre;
     private $apellido;
     private $nroCliente;

     public function __construct($videntificacion,$vnombre,$vapellido,$num)
     {
         $this->identificacion = $videntificacion;
         $this->nombre = $vnombre;
         $this->apellido = $vapellido;
         $this->nroCliente = $num;
     }

    
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

     public function getNroCliente (){
        return $this->nroCliente;
     }
     public function setNroCliente($num){
       $this->nroCliente = $num;
     }

    
     public function __toString()
     {
         return "CLIENTE \n". 
                "NRO CLIENTE: ".$this->getNroCliente()."\n".
                "ID ".$this->getIdentificacion(). 
                "\n NOMBRE: ".$this->getNombre().
                "\n APELLIDO: ".$this->getApellido(); 

     }
 }