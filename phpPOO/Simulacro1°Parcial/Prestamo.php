<?php

/*En la clase Prestamo:
1. Se registra la siguiente información: identificación, código del electrodoméstico, fecha otorgamiento,
monto, cantidad_de_cuotas, taza de interés, la colección de cuotas y la referencia a la persona que solicito 
el préstamo.
2. Método constructor que recibe como parámetros los siguientes valores: identificación, monto, cantidad
de cuotas, taza de interés y la referencia a la persona que solicito el préstamo. El constructor debe asignar 
los valores recibidos a las variables instancias que corresponda.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método privado calcularInteresPrestamo(numCuota) que recibe por parámetro el numero de la 
cuota y calcula el importe del interés sobre el saldo deudor. */


class Prestamo{
    
    private $identificacion;
    private $idElectrodomestico;
    private $fechaOtorgamiento;
    private $monto;
    private $cantidad_de_cuotas;
    private $tazaInteres;
    private $arrayCuotas;
    private $objPersona;

    //metodo constructor 
    public function __construct($id,$monto,$cantidadCuotas,$tazaInt,$objPersona)
    {
        $this->identificacion=$id;
        $this->monto=$monto;
        $this->cantidad_de_cuotas=$cantidadCuotas;
        $this->tazaInteres=$tazaInt;
        $this->arrayCuotas = [];//inicializo la coleccion de cuotas en vacio
        $this->objPersona=$objPersona;
        
    }

    //metodos de acceso
    public function getIdentificacion(){
        return $this-> identificacion; 
    }
    public function setIdentificacion($id){
        $this->identificacion=$id;
    }

    public function getIdElectrodomestico(){
        return $this-> idElectrodomestico; 
    }
    public function setIdElectrodomestico($id){
        $this->idElectrodomestico=$id;
    }

    public function getFechaOtorgamiento(){
        return $this-> fechaOtorgamiento; 
    }
    public function setFechaOtorgamiento($fecha){
        $this->fechaOtorgamiento=$fecha;
    }

    public function getMonto(){
        return $this-> monto; 
    }
    public function setMonto($valor){
        $this->monto=$valor;
    }

    public function getCantCuotas(){
        return $this-> cantidad_de_cuotas; 
    }
    public function setCantCuotas($cuotas){
        $this-> cantidad_de_cuotas=$cuotas;
    }

    public function getTazaInteres(){
        return $this-> tazaInteres; 
    }
    public function setTazaInteres($tazaInt){
        $this->tazaInteres=$tazaInt;
    }

    public function getColeccionCuotas(){
        return $this-> arrayCuotas; 
    }
    public function setColeccionCuotas($array){
        $this->arrayCuotas=$array;
    }

    public function getObjPersona(){
        return $this-> objPersona; 
    }
    public function setObjPersona($objeto){
        $this->objPersona=$objeto;
    }

    /*5. Implementar el método privado calcularInteresPrestamo(numCuota) que recibe por parámetro el numero de la 
    cuota y calcula el importe del interés sobre el saldo deudor.
    interes cuota numCuota = ( monto - (( monto/ cantidad_de_cuotas) * numCuota -1)) * taza_de_interés 
    la formula deberia ser:
        numCuota = ( monto - (( monto/ cantidad_de_cuotas) * (numCuota -1))) * taza_de_interés/0.01   */
    private function calcularInteresPrestamo($numCuota){

        $monto= $this->getMonto();
        $cantCuotas= $this->getCantCuotas();
        $interes= $this->getTazaInteres();

        $interesPrestamo =( $monto - (( $monto/ $cantCuotas ) * ($numCuota - 1 ))) * $interes / 0.01;
        return $interesPrestamo;

    }

    /*6.Implementar el método otorgarPrestamo que setea la variable instancia fecha otorgamiento, con la
    fecha actual (puede utilizar el valor retornado por la función de PHP getdate()) y genera cada una de las
    cuotas dependiendo el valor almacenado en la variable instancia “cantidad_de_cuotas” y monto.  
    Importe total de la cuota debe ser calculado de la siguiente manera: (monto / cantidad_de_cuotas )
    y el monto correspondiente al interés debe ser el valor retornado por el método calcularInteresPrestamo(numeroCuota) 
    implementado en el inciso anterior.*/
    public function otorgarPrestamo(){

        $cuotas=[];
        $this->setFechaOtorgamiento(getDate());//le estoy asignando una fechaa al prestamo otorgado

        $cantCuotas=$this->getCantCuotas();
        $monto=$this->getMonto();

        //se genera el valor de cada una de las cuotas con esta operacion          
        $montoCuota= ($monto / $cantCuotas);
        




        
    }

    /*7. Implementar el método darSiguienteCuotaPagar método que retorna la referencia a la siguiente cuota
    que debe ser abonada de un préstamo, si el préstamo tiene todas sus cuotas canceladas retorna null.*/



    //metodo to string
    public function __toString()
    {
        return 
            "Identificacion: ".$this->getIdentificacion()."\n".
            "Identificacion Electrodomestico: ".$this->getIdElectrodomestico()."\n".
            "Fecha Otorgamiento: ".$this->getFechaOtorgamiento()."\n".
            "Monto: ".$this->getMonto()."\n".
            "Cantidad de Cuotas: ".$this->getCantCuotas()."\n".
            "Taza de Interes: ".$this->getTazaInteres()."\n".
            "Coleccion de Cuotas: ".print_r($this->getColeccionCuotas())."\n".
            "Datos deudor \n".$this->getObjPersona()."\n";
        
    }
}



