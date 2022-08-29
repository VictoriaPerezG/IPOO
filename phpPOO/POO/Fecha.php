<?php

class Fecha{

    private $dia;
    private $mes;
    private $anio;

    public function __construct($dia,$mes,$anio){
        $this-> dia = $dia;
        $this-> mes = $mes;
        $this-> anio = $anio;

    }

    public function toStringFechaEnNumeros(){
        return "(". $this-> dia ."/". $this->mes ."/". $this->anio .")";
       
    }

    public function toStringFechaExt(){
        if($this->mes == 1){
            return "(". $this-> dia ." de Enero de ". $this->anio .")";}
        elseif($this->mes == 2){
            return "(". $this-> dia ." de Febrero  de ". $this->anio .")";}
        elseif($this->mes == 3){
            return "(". $this-> dia ." de Marzo de ". $this->anio .")";}
        elseif($this->mes == 4){
            return "(". $this-> dia ." de Abril de ". $this->anio .")";}
        elseif($this->mes == 5){
            return "(". $this-> dia ." de Mayo de ". $this->anio .")";}
        elseif($this->mes == 6){
            return "(". $this-> dia ." de Junio de ". $this->anio .")";}
        elseif($this->mes == 7){
            return "(". $this-> dia ." de Julio de ". $this->anio .")";}
        elseif($this->mes == 8){
            return "(". $this-> dia ." de Agosto de ". $this->anio .")";}
        elseif($this->mes == 9){
            return "(". $this-> dia ." de Septiembre de ". $this->anio .")";}
        elseif($this->mes == 10){
            return "(". $this-> dia ." de Octubre de ". $this->anio .")";}
        elseif($this->mes == 11){
            return "(". $this-> dia ." de Noviembre de ". $this->anio .")";}
        elseif($this->mes == 12){
            return "(". $this-> dia ." de Diciembre de ". $this->anio .")";}
       
     }

     
     private function IncrementUnDia($dia){
        for($i=0;$i<=30;$i++){
            $this->dia = $this -> dia + 1;
        }
        return $this->dia;
     }

     public function Increment($int,$date){




     }





}