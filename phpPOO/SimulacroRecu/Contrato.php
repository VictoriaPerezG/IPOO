<?php

class Contrato{
    private $fechaInicio;
    private $fechaVenc;
    private $objPlan;
    private $estado;
    private $costo;
    private $renueva;
    private $refCliente;
    
    public function __construct($inicio,$venc,$objplan,$estado,$costo,$renueva,$cliente)
    {
        $this->fechaInicio = $inicio;
        $this->fechaVenc = $venc;
        $this->objPlan = $objplan;
        $this->estado = $estado;
        $this->costo = $costo;
        $this->renueva = $renueva;
        $this->refCliente = $cliente;
    }


    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function setFechaInicio($fecha){
        $this->fechaInicio = $fecha;
    }

    public function getFechaVenc(){
        return $this->fechaVenc;
    }
    public function setFechaVenc($fecha){
        $this->fechaVenc = $fecha;
    }

    public function getObjPlan(){
        return $this->objPlan;
    }
    public function setObjPlan($obj){
        $this->objPlan = $obj;
    }

    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getCosto(){
        return $this->costo;
    }
    public function setCosto($costo){
        $this->costo = $costo;
    }

    public function getRenueva(){
        return $this->renueva;
    }
    public function setRenueva($renueva){
        $this->renueva = $renueva;
    }

    public function getCliente(){
        return $this->refCliente;
    }
    public function setCliente($cliente){
        $this->refCliente = $cliente;
    }

    public function __toString()
    {
        return  "INICIO: ". $this->getFechaInicio()."\n".
                "VENCIMIENTO: ". $this->getFechaVenc()."\n".
                $this->getObjPlan()."\n".
                "ESTADO: ". $this->getEstado()."\n".
                "COSTO: ". $this->getCosto()."\n".
                "RENUEVA: ". $this->getRenueva()."\n".
                 $this->getCliente()."\n";
    }


    public function calcularImporte(){
        $plan = $this->getObjPlan();
        $colCanales = $plan->getColCanales();
        $importePlan = $plan->getImporte();
        $importeCanal = 0;
        for ($i=0; $i <count($colCanales) ; $i++) {
            $canal =  $colCanales[$i];
            $importe = $canal->getImporte();
            $importeCanal = $importeCanal + $importe; 
        }
        
        $importeFinal = $importeCanal + $importePlan;
        $this->setCosto($importeFinal);
        return $importeFinal;
        
    }

  
    public function actualizarEstadoContrato(){
        $diasVenc = $this->diasContratoVencido();

        if ($diasVenc > 1) {
            $this->setEstado('moroso');
        }
        elseif($diasVenc > 10){
            $this->setEstado('suspendido');
        }
        else {
            $this-> setEstado('al dia');
        }


    }


    public function diasContratoVencido(){
        $fechaV = $this->getFechaVenc();
        $fechaActual = 15;
        $dias = false;

        if( $fechaV > $fechaActual ){
            $dias = $fechaActual - $fechaV;
        }

        return $dias;

    }

    
    /*public function pagarContrato(){
        $this->actualizarEstadoContrato();
        $estadoContrato = $this->getEstado();
        $importe = false;

        if($estadoContrato == 'suspendido'){
            $diasVenc = $this->diasContratoVencido();
            $porcentaje = ((( 10 * $importe)/100) + $diasVenc);
            $importe = $importe + $porcentaje;
            $this->setRenueva('no pérmitido');
            
        }
        elseif ($estadoContrato == 'moroso') {
            $diasVenc = $this->diasContratoVencido();
            $porcentaje = ((( 10 * $importe)/100) + $diasVenc);
            $importe = $importe + $porcentaje;
            $this->setEstado('al dia');
            $this->setRenueva('si');
        }
        else{
            //si el contrato se encuentra al dia 
            $importe = $this->calcularImporte();
        }

        return $importe;
    }*/

}

                                                                                                                                           