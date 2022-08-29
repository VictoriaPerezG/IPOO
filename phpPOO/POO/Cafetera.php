<?php
// VER CLASE DONDE SE CORRIGE ESTA PUNTO
class Cafetera{

    private $capacidadMaxima;//la cantidad máxima de café que puede contener la cafetera
    private $cantidadActual;//la cantidad actual de café que hay en la cafetera
  

    public function __construct($maxCap,$cantActual)
    {
        $this -> capacidadMaxima=$maxCap;
        $this -> cantidadActual=$cantActual;
        
    }

    public function getCantidadActual(){
        return $this->cantidadActual;
    }
    public function setCantidadActual($cantidad)
    {
        $this->cantidadActual=$cantidad; 
    }


    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }
    public function setCapacidadMaxima($capacidad)
    {
        $this->capacidadMaxima=$capacidad; 
    }

    // llenarCafetera(): la cantidad actual debe ser igual a la capacidad de la cafetera
    public function llenarCafetera(){
        if($this->getCantidadActual() === $this->getCapacidadMaxima()){
            $valor=true;

        }else{
            $valor=false;
        }
        return $valor ;
    }


    //vaciarCafetera(): pone la cantidad de café actual en cero
    public function vaciarCafetera(){
        $vaciar=$this->setCantidadActual(0);
        return $vaciar;
    }

    //agregarCafe($cantidad): añade a la cafetera la cantidad de café indicada
    public function agregraCafe($cantidad){


         $agregar= $this->setCantidadActual($cantidad);
        

        return $agregar;


    }

    /*
    servirTaza($cantidad): simula la acción de servir una taza con la capacidad indicada. Si la
    cantidad actual de café “no alcanza” para llenar la taza, se sirve lo que quede y se envía un mensaje
    al consumidor para que sepa porque no se le sirvió un taza completa*/
    public function servirTaza($cantidad){
        
        if ($this->getCantidadActual()<=$cantidad) {
            $servirTaza=$this->getCantidadActual();
        }else {
            $servirTaza= false;
        }
        
        return $servirTaza;
        
        
       
    }


    public function __toString()
    {  
        if($this->llenarCafetera()){
            $valor="Cafetera llena";
        }else{
            $valor="Se tiene que llenar la cafetera";
        }

        $cadena= "La Capacidad maxima de la cafetera es: " .$this->getCapacidadMaxima()."\n".
                 "La Capacidad actual de la cafetera es: " .$this->getCantidadActual()."\n".
                 
                 $valor."\n";
                 "Vaciar cafetera: " .$this->vaciarCafetera(). $this->getCantidadActual()."\n";




        return $cadena;



    }
    
    











} 