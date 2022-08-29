<?php
/* Implementar la clase EmpresaCable que contiene una colección de planes y la colección de
contratos realizados por la empresa. La clase cuenta con los siguientes métodos:*/

class EmpresaCable{
    private $colPlanes = [];
    private $colContratos = [];

    public function __construct($arrPlanes,$arrContratos)
    {
        $this->colPlanes = $arrPlanes;
        $this->colContratos = $arrContratos;
    }

    public function getColPlanes(){
        return $this->colPlanes;
    }
    public function setColPlanes($array){
        $this->colPlanes = $array;
    }

    public function getColContratos(){
        return $this->colContratos;
    }
    public function setColContratos($array){
        $this->colContratos = $array;
    }

    public function __toString()
    {
        return "EMPRESA DE CABLE \n".
                "COLECCION PLANES: ".print_r($this->getColPlanes(),true)."\n".
                "COLECCION CONTRATOS: ".print_r($this->getColContratos(),true)."\n";
    }


    /* ●incorporarPlan: que incorpora a la colección de planes un nuevo plan siempre y cuando no haya un
    plan con los mismos canales y los mismos MG (en caso de que el plan incluyera).*/
    public function incorporarPlan($nuevoPlan){
        $colPlanes = $this->getColPlanes();
        $colCanalesNuevoPlan = $nuevoPlan->getColCanales();
        $datosMGNuevoPlan = $nuevoPlan->getDatosMG();
        $value = false;
        foreach ($colPlanes as $plan){
            $colCanales = $plan->getColCanales();
            $datosMG = $plan->getDatosMG();
            if(($this->comparacionCanales($colCanalesNuevoPlan, $colCanales)) && ($datosMG <> $datosMGNuevoPlan)){
                $i = count($colPlanes);
                $colPlanes[$i] = $nuevoPlan; 
                $this->setColPlanes($colPlanes);
                $value = true;
            }
        }

        return $value;
    }

    public function comparacionCanales($colCanalesNuevoPlan,$colCanales){
        $value = false;
        foreach($colCanales as $canal ){
            $tipo = $canal ->getTipoCanal();
            foreach($colCanalesNuevoPlan as $canalv){
                $tipov = $canalv ->getTipoCanal();
                if($tipo <> $tipov){
                    $value = true;
                }
            }
        }

        return $value;
    }


    /*● incorporarContrato: método que recibe por parámetro el plan, una referencia al cliente, la fecha de
    inicio y de vencimiento del mismo y si se trata de un contrato realizado en la empresa o via web (si el
    valor del parámetro es True se trata de un contrato realizado via web).*/
    public function incorporarContrato($plan,$objCliente,$fechaI,$fechaV,$tipo){
        $contrato = null;
        $colContratos = $this->getColContratos();

        if ($tipo) {
           $contrato = new ViaWeb ($fechaI,$fechaV,$plan,'al dia',0,'-',$objCliente);
           $i = count($colContratos);
           $colContratos[$i] = $contrato;
           $this->setColContratos($colContratos);
        }
        else{
           $contrato = new Oficina ($fechaI,$fechaV,$plan,'al dia',0,'-',$objCliente);
           $i = count($colContratos);
           $colContratos[$i] = $contrato;
           $this->setColContratos($colContratos);
        }

        return $contrato;
    }

    /*● retornarImporteContratos: método que recibe por parámetro el código de un plan y retorna la suma
    de los importes de los contratos realizados usando ese plan.*/
    public function retornarImporteContratos($idPlan){
        $colContratos = $this->getColContratos();
        $sumaIPlan = 0;
        foreach($colContratos as $contrato){
            $plan = $contrato ->getObjPlan();
            if($idPlan === ($plan->getCodigo())){
                $importe = $contrato->getCosto(); 
                $sumaIPlan = $sumaIPlan + $importe;
            }
        }

        return $sumaIPlan;
    }

    /*● pagarContrato: método recibe como parámetro un contrato, actualiza su estado y retorna el importe
    final que debe ser abonado por el cliente*/
    public function pagarContrato($contrato){
        
        $contrato->actualizarEstadoContrato();
        $estadoContrato = $contrato->getEstado();
        $importe = 0;

        if($estadoContrato == 'suspendido'){
            $diasVenc = $contrato->diasContratoVencido();
            $porcentaje = ((( 10 * $importe)/100) + $diasVenc);
            $importe = $importe + $porcentaje;
            $$contrato->setRenueva('no pérmitido');
            
        }
        elseif ($estadoContrato == 'moroso') {
            $diasVenc = $contrato->diasContratoVencido();
            $porcentaje = ((( 10 * $importe)/100) + $diasVenc);
            $importe = $importe + $porcentaje;
            $contrato->setEstado('al dia');
            $contrato->setRenueva('si');
        }
        else{
            //si el contrato se encuentra al dia 
            $importe = $contrato->calcularImporte();
        }

        return $importe;

    }

}