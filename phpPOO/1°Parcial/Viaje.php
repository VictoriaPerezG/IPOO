<?php

/*En la clase Viaje:
1. Se registra la siguiente información: destino, hora de partida, hora de llegada, número, importe, fecha,
cantidad de asientos totales, cantidad de asientos disponibles, y una referencia a la persona responsable
del viaje.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método asignarAsientosDisponibles($catAsientos) que recibe por parámetros la cantidad de asientos que desean asignarse. El método retorna verdadero en caso que la asignación pueda
concretarse y falso en caso contrario.*/


class Viaje{

    //atributos de la clase 
    private $destino;
    private $hrPartida;
    private $hrLlegada;
    private $numero;
    private $importe;
    private $fecha;
    private $cantAsientosTotales;
    private $cantAsientosDisp;
    private $objRespV;

    //metodo contructor de la clase
    public function __construct($des,$partida,$llegada,$nro,$costo,$fecha,$totalAsien,$dispAsien,$objResp)
    {
        $this->destino = $des;
        $this->hrPartida = $partida;
        $this->hrLlegada = $llegada;
        $this->numero = $nro;
        $this->monto = $costo;
        $this->fecha = $fecha;
        $this->cantAsientosTotales = $totalAsien;
        $this->cantAsientosDisp = $dispAsien;
        $this->objRespV = $objResp;

    }

    //metodos de acceso 
    public function getDestino(){
        return $this->destino;
    }
    public function setDestino($newDes){
        $this->destino=$newDes;
    }

    public function getHsPartida(){
        return $this->hrPartida;
    }
    public function setHsPartida($hora){
        $this->hsPartida=$hora;
    }

    public function getHsLlegada(){
        return $this->hrLlegada;
    }
    public function setHsLlegada($hora){
        $this->hsLlegada=$hora;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($nro){
        $this->numero=$nro;
    }

    public function getMonto(){
        return $this->importe;
    }
    public function setMonto($newMonto){
        $this->importe=$newMonto;
    }

    public function getFecha(){
        return $this->fecha;
    }
    public function setFecha($newFecha){
        $this->fecha=$newFecha;
    }

    public function getTotalAsientos(){
        return $this->cantAsientosTotales;
    }
    public function setTotalAsientos($cant){
        $this->cantAsientosTotales=$cant;
    }

    public function getAsientosDisp(){
        return $this->cantAsientosDisp;
    }
    public function setAsientosDisp($cant){
        $this->cantAsientosDisp=$cant;
    }

    public function getObjResponsable(){
        return $this->objRespV;
    }
    public function setObjResponsable($newObj){
        $this->objRespV=$newObj;
    }


    /*5. Implementar el método asignarAsientosDisponibles($catAsientos) que recibe por parámetros la cantidad de 
    asientos que desean asignarse. El método retorna verdadero en caso que la asignación pueda concretarse y falso 
    en caso contrario*/
    public function asignarAsientosDisponibles($cantAsientos){
        
        $asientosActualesDisp= $this->getAsientosDisp();
        $asientosTotales= $this->getTotalAsientos();
        $asientos = $asientosActualesDisp + $cantAsientos;

        if (($cantAsientos<=$asientosActualesDisp) && ($asientos <= $asientosTotales) ) {
           $bandera = true;
        }else {
            $bandera = false;
        }

        return $bandera;

    }


    //metodo to string de la clase 
    public function __toString()
    {
        //se crea una instancia de la clase responsable
        $responsable = $this->getObjResponsable();

        return "DESTINO: ".$this->getDestino()."\n".
                "HR PARTIDA: ".$this->getHsPartida()."\n".
                "HR LLEGADA: ".$this->getHsLlegada()."\n".
                "NUMERO: ".$this->getNumero()."\n".
                "MONTO: ".$this->getMonto()."\n".
                "FECHA: ".$this->getFecha()."\n".
                "ASIENTOS TOTALES: ".$this->getTotalAsientos()."\n".
                "ASIENTOS DISPONIBLES: ".$this->getAsientosDisp()."\n".
                "RESPONSABLE VIAJE ".$responsable."\n";

    }


}