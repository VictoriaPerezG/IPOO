<?php

/*En la clase Financiera:
1. Se registra la siguiente información: denominación, dirección y la colección de prestamos otorgados.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase denominación, dirección.
3. Los métodos de acceso para cada una de las variables instancias de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método incorporarPrestamo que recibe por parámetro un nuevo préstamo.
6. Implementar el método otorgarPrestamoSiCalifica, método que recorre la lista de prestamos que no
han sido generadas sus cuotas. Por cada préstamo, se corrobora que su monto dividido la
cantidad_de_cuotas no supere el 40 % del neto del solicitante, si la verificación es satisfactoria se invoca
al método otorgarPrestamo.
7. Implementar el método informarCuotaPagar(idPrestamo) que recibe por parámetro la identificación del
préstamo, se busca el préstamo en la colección de prestamos y si es encontrado se obtiene la siguiente
cuota a pagar. El método debe retornar la referencia a la cuota. Utilizar para su implementación el método darSiguienteCuotaPagar 
*/

class Financiera{

    private $denominacion;
    private $direccion;
    private $coleccionPrestamosOtorgados;

    //metodo constructor 
    public function __construct($denominacion,$direccion)
    {
        $this->denominacion=$denominacion;
        $this->direccion=$direccion;
        $this->coleccionPrestamosOtorgados=[];//se inicializa el array de la coleccion de prestamos
        
    }

    //metodos de acceso para las variables instancia de la clase
    public function getDenominacion(){
        return $this->denominacion;
    }
    public function setDenominacion($variable){
        $this->denominacion=$variable;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($dire){
        $this->direccion=$dire;
    }

    public function getColeccionPrestamosOtorgados(){
        return $this->coleccionPrestamosOtorgados;
    }
    public function setColeccionPrestamosOtorgados($array){
        $this->coleccionPrestamosOtorgados=$array;
    }

    //metodo to string 
    public function __toString()
    {
        return "Denominacion: " . $this->getDenominacion()."\n".
                "Direccion: " .$this->getDireccion()."\n".
                "Prestamos Otorgados: " .print_r($this->getColeccionPrestamosOtorgados(),true);
    }

    //5. Implementar el método incorporarPrestamo que recibe por parámetro un nuevo préstamo.
    public function incorporarPrestamo($nuevoPrestamo){
        return $this->setColeccionPrestamosOtorgados($nuevoPrestamo);
    }

    /*6. Implementar el método otorgarPrestamoSiCalifica, método que recorre la lista de prestamos que no
    han sido generadas sus cuotas. Por cada préstamo, se corrobora que su monto dividido la
    cantidad_de_cuotas no supere el 40 % del neto del solicitante, si la verificación es satisfactoria se invoca
    al método otorgarPrestamo.*/
    public function otorgarPrestamoSiCalifica(){}

    /*7. Implementar el método informarCuotaPagar(idPrestamo) que recibe por parámetro la identificación del
    préstamo, se busca el préstamo en la colección de prestamos y si es encontrado se obtiene la siguiente
    cuota a pagar. El método debe retornar la referencia a la cuota. Utilizar para su implementación 
    el método darSiguienteCuotaPagar */
    public function informarCuotaPagar($idPrestamo){
         
    }

}