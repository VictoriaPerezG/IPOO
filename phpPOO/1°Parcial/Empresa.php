<?php

/*En la clase Empresa :
1. Se registra la siguiente información: identificación, nombre y la colección de Viajes que realiza.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método darViajeADestino($elDestino) que recibe por parámetro un destino junto a una
cantidad de asientos y retorna una colección con todos los viajes disponibles a ese destino.
6. Implementar el método incorporarViaje($objViaje) que recibe como parámetro un viaje, verifica que no
se encuentre registrado ningún otro viaje al mismo destino, en la misma fecha y con el mismo horario de
partida. El método retorna verdadero si la incorporación del viaje se realizó correctamente y falso en caso
contrario.
7. Implementar el método venderViajeADestino($canAsientos, $destino) método que recibe por parámetro la cantidad de 
asientos y el destino y se registra la asignación del viaje en caso de ser posible. (invocar
al método asignarAsientosDisponibles). El método retorna la instancia del viaje asignado o null en caso
contrario.
8. Implementar el método montoRecaudado que retorna el monto recaudado por la Empresa.
( tener en cuenta los asientos vendidos y el importe del viaje)*/

class Empresa{

    //atributos de la clase 
    private $identificacion;
    private $nombre;
    private $colViajes=[];

    //metodo constructor 
    public function __construct($id,$nom,$arrayViajes)
    {
        $this->identificacion= $id;
        $this->nombre= $nom;
        $this->colViajes= $arrayViajes;
    }

    //metodos de acceso
    public function getId(){
        return $this->identificacion;
    }
    public function setId($id){
        $this->identificacion=$id;
    } 

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($name){
        $this->nombre=$name;
    } 

    public function getViajes(){
        return $this->colViajes;
    }
    public function setViajes($objViaje){
        $this->colViajes=$objViaje;
    } 

    
    /*5. Implementar el método darViajeADestino($elDestino) que recibe por parámetro un destino junto a una
    cantidad de asientos y retorna una colección con todos los viajes disponibles a ese destino.*/
    public function darViajeADestino($elDestino, $cantAsientos){

        $arrayViajes= $this->getViajes();
        $viajesDisp=[];
    
        for($i=0;$i<count($arrayViajes) ;$i++){
            
            $unViaje=$arrayViajes[$i];
            
            $destino = $unViaje->getDestino();

            if ( ($destino == $elDestino) && ($unViaje->asignarAsientosDisponibles($cantAsientos))){
               $viajesDisp = [$unViaje];
            }
            
           
        }

        return $viajesDisp;
    }


    /*6. Implementar el método incorporarViaje($objViaje) que recibe como parámetro un viaje, verifica que no
    se encuentre registrado ningún otro viaje al mismo destino, en la misma fecha y con el mismo horario de
    partida. El método retorna verdadero si la incorporación del viaje se realizó correctamente y falso en caso
    contrario..*/
    public function incorporarViaje($objViaje){

        $arrayViajes= $this->getViajes();
        $i=0;
        $encontrado=false;
    
        while ($i<count($arrayViajes) && !$encontrado){
            $viajeDelArray=$arrayViajes[$i];

            $destino=$viajeDelArray->getDestino();
            $fecha=$viajeDelArray->getFecha();
            $hsPartida=$viajeDelArray->getHsPartida();

            if (($destino<> $objViaje->getDestino()) && ($fecha<>$objViaje->getFecha()) && ($hsPartida<> $objViaje->getHsPartida())) {
                $encontrado = true;
            }
            else{
                $encontrado=false;
                
            }

            $i++;
        }


        if($encontrado){
            
            $arrayviajes[$i+1] = $objViaje; 
            $this->setViajes($arrayViajes);
        }

        return $encontrado;
    }


    /*7. Implementar el método venderViajeADestino($canAsientos, $destino) método que recibe por parámetro la 
    cantidad de asientos y el destino y se registra la asignación del viaje en caso de ser posible. (invocar
    al método asignarAsientosDisponibles. El método retorna la instancia del viaje asignado o null en caso
    contrario.*/
    public function venderViajeADestino($cantAsientos,$fechaViaje ,$destino){
    
      


    }

 


    /*8. Implementar el método montoRecaudado que retorna el monto recaudado por la Empresa.
    ( tener en cuenta los asientos vendidos y el importe del viaje)*/
    public function montoRecaudado(){


        $arrayViaje= $this->getViajes();
        $montoTotal=0;

        for ($i=0; $i <count($arrayViaje) ; $i++) { 
            $unviaje= $arrayViaje[$i];
            $montoViaje= $unviaje-> getMonto();
            $montoTotal= $montoTotal + $montoViaje;  
        }
        
        return $montoTotal;
    }



    //metodo to string
    public function __toString()
    {
        return "IDENTIFICACION: ".$this->getId()."\n".
                "NOMBRE: ".$this->getNombre()."\n".
                "VIAJES: \n".print_r($this->getViajes())."\n";
    }





}