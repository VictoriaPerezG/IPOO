<?php

/*En la clase Cuota:
1. Se registra la siguiente información: número ,monto_cuota , monto_interes y cancelada (atributo que va a
contener un valor true, si la cuota esta paga y false en caso contrario)
2. Método constructor que recibe como parámetros los valores iniciales para los atributos: número,
monto_cuota y monto_interes definidos en la clase. Por defecto todas las cuotas deben ser generadas
como canceladas = false.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método darMontoFinalCuota() que retorna el importe total de la cuota mas los intereses
que deben ser aplicados.*/

class Cuota{

    private $numero;
    private $monto_cuota;
    private $monto_interes;
    private $cancelada;

    //metodo constructor
    public function __construct($numCuota,$montoCuota,$monotoInteres){
        
        $this->numero=$numCuota;
        $this->monto_cuota=$montoCuota;
        $this->monto_interes=$monotoInteres;
        $this->cancelada=false;
    }

    //metodos de acceso
    public function getCancelada(){
        return $this->cancelada;
    }
    public function setCancelada($valor){
        $this->cancelada=$valor;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($num){
        $this->numero=$num;
    }

    public function getMontoCuota(){
        return $this->monto_cuota;
    }
    public function setMontoCuota($monto){
        $this->monto_cuota=$monto;
    }

    public function getInteres(){
        return $this->monto_interes;
    }
    public function setInteres($monto){
        $this->monto_interes=$monto;
    }

    //5. Implementar el método darMontoFinalCuota() que retorna el importe total de la cuota mas los intereses que deben ser aplicados.
    public function darMontoFinal()
    {
        $suma=$this->getMontoCuota()+$this->getInteres();
        return $suma;
    }


    //metodo to string
    public function __toString()
    {
        if($this->getCancelada()){
           $rta="Si";            
        }else{
            $rta="No ";
        }

        return 
                "N° Cuota: ".$this->getNumero()."\n".
                "Monto Cuota: ".$this->getMontoCuota()."\n".
                "Monto Interes: ".$this->getInteres()."\n".
                "Cancelada: ".$rta;
        
    }

}