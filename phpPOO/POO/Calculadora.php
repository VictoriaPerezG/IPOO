<?php
//Diseñar e implementar la clase Calculadora que permite realizar las operaciones básicas: + , - , *, /

class Calculadora{

    // se definen las propiedades del objeto d emodo privado
    private $num1;
    private $num2;
    

    public function __construct($primero,$segundo){
        $this-> num1=$primero;
        $this-> num2=$segundo;
    }

    public function getPrimero(){
        return $this-> num1;
    }

    public function setPrimero($numero1){

        $this-> num1 =$numero1;
    }

    public function getSegundo(){
        return $this-> num2;
    }
    

    public function setSegundo($numero2){
        $this-> num2 =$numero2;

    }



    public function Suma(){

       $suma= $this->getPrimero() + $this->getSegundo(); 
        return $suma;


    }
    public function Resta(){

        $resta = $this->getPrimero() - $this->getSegundo();
        return $resta;


    }
    public function Multiplicacion(){
        $multiplicacion= $this-> getPrimero() * $this->getSegundo();
        return $multiplicacion;

    }
    public function Division(){
       
        $division= $this-> getPrimero() / $this->getSegundo();
        return $division;
    }

    public function __toString()
    {
        $cadena= "El primer num es: ".$this->getPrimero() . "; el segundo num es: ". $this->getSegundo();
        return $cadena;
    }

   


}

