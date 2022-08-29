<?php 

/*En la clase Terminal:
1. Se registra la siguiente información: denominación, dirección y la colección empresas registradas en la
terminal.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase.
3. Los métodos de acceso para cada una de las variables instancias de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método ventaAutomatica($cantAsientos, $fecha, $destino, $empresa) que recibe por
parámetro la cantidad de asientos que se requieren, una fecha, un destino y la empresa con la que se
desea viajar. Automáticamente se registra la venta del viaje. (Para la implementación de este método
debe utilizarse uno de los métodos implementados en la clase Viaje).
6. Implementar el método empresaMayorRecaudacion retorna un objeto de la clase empresa que se corresponde con la 
de mayor recaudación.
7. Implementar el método responsableViaje($numeroViaje) que recibe por parámetro un numero de viaje
y retorna al responsable del viaje.*/

class Terminal{

    //atributos de la clase
    private $denominacion;
    private $direccion;
    private $colEmpresas=[];

    //metodo constructor 
    public function __construct($denom,$dire,$colEmp)
    {
        $this-> denominacion = $denom;
        $this-> direccion = $dire;
        $this-> colEmpresas = $colEmp;

    }

    //metodos de acceso
    public function getDenominacion(){
        return $this->denominacion;
    }
    public function setDenominacion($deno){
        $this->denominacion=$deno;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($dire){
        $this->direccion=$dire;
    }

    public function getEmpresas(){
        return $this->colEmpresas;
    }
    public function setEmpresas($objEmpresas){
        $this->colEmpresas=$objEmpresas;
    }

    /*5. Implementar el método ventaAutomatica($cantAsientos, $fecha, $destino, $empresa) que recibe por
    parámetro la cantidad de asientos que se requieren, una fecha, un destino y la empresa con la que se
    desea viajar. Automáticamente se registra la venta del viaje. (Para la implementación de este método
    debe utilizarse uno de los métodos implementados en la clase Viaje).*/

    /*6. Implementar el método empresaMayorRecaudacion retorna un objeto de la clase empresa que se corresponde
     con la de mayor recaudación.*/
    public function empresaMayorRecaudacion(){

        $empresas = $this->getEmpresas();

        for ($i=0; $i <count($empresas) ; $i++) { 
            
            $unaEmpresa= $empresas[$i];
            $unaEmpresa->montoRecaudado();
            

        }



    }


    //metodo to string
    public function __toString()
    {
        return "DENOMINACION: ".$this->getDenominacion()."\n".
                "DIRECCION: ".$this->getDireccion()."\n".
                "EMPRESAS: \n".print_r($this->getEmpresas())."\n";
    }
}