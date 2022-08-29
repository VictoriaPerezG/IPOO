<?php

/*La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. 
De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase 
(incluso los datos de los pasajeros). Utilice un array que almacene la información correspondiente a los pasajeros. 
Cada pasajero es un array asociativo con las claves “nombre”, “apellido” y “numero de documento”.*/

/*Coreccion de la primera entrega:
  * No Define un método especial para modificar los datos de 1 pasajero
  * No Se verifica la generación con valores predefinidos.(quiere decir que la unica forma que 
  teniamos de probar tu codigo es si o si cargando uno a uno los valores, algunos alumnos ya tiene precargado 
  por ejemplo el arreglo de pasajeros entonces corro de una el codigo)
  * No Se verifica el uso de los set para cambiar los valores.
  * No Se verifica el uso de la función que modifica los datos de un pasajero
*/

class Viaje{

    private $idViaje;
    private $destino;
    private $maximoPasajeros;
    private $pasajeros; //inicializo el array de pasajeros

    //metodo constructor de la clase
    public function __construct($codigoViaje,$destinoViaje,$cantMaxPasajeros,$pasajerosViaje){

        $this->idViaje=$codigoViaje;
        $this->destino=$destinoViaje;
        $this->maximoPasajeros=$cantMaxPasajeros;
        $this->pasajeros=$pasajerosViaje;

    }

    //metodos de acceso
    public function getCodigo(){
        return $this-> idViaje;
    }
    public function setCodigo($numero){

        $this-> idViaje =$numero;
    }


    public function getDestino(){
        return $this-> destino;
    }
    public function setDestino($lugar){

        $this-> destino =$lugar;
    }

    public function getMaximaPasajeros(){
        return $this-> maximoPasajeros;
    }
    public function setMaximaPasajeros($numero){

        $this-> maximoPasajeros =$numero;
    }
    
    public function getArrayPasajeros(){
        return $this-> pasajeros;
    }
    public function setArrayPasajeros($arrayPasajeros){

        $this-> pasajeros =$arrayPasajeros;
    }

    /*En esta funcion se va a modificar los datos de un pasajero del arreglo pasajero, si se desea modificar unicamente un arrglo 
     dentro de un arreglo indexado se utiliza un recorrido parcial */
    public function ModificarDatosPasajero($Pviaje,$dniAnterior,$nombrePnew, $apellidoPnew,$docPnew){

        //se inicializan las variables para la repetitiva
        $arrayPasajeros = $this->getArrayPasajeros();
        $i=0;
        $encontrado=false;

        while ($i < count($arrayPasajeros) && !$encontrado) {
            
            $pasajero = $arrayPasajeros[$i]; //se obtiene el indice del pasajero que se desea modificar
            $encontrado = ($pasajero["documento"] == $dniAnterior); /*se compara si el numero de documento del 
            arreglo pasajero coincide con el pasado por paramentro y devuelve un valor booleano que permite salir 
            del bucle de repetitiva*/
            $i++;

        }

        if($encontrado){
            
            $newPasajero=["nombre"=>$nombrePnew,"apellido"=> $apellidoPnew, "documento" => $docPnew];
            $arrayPasajeros[$i-1] = $newPasajero ; /*se asigna el pasajero modificado en el puesto anterior dentro 
                                                    del arrayPasajeros */
            $Pviaje = $this->setArrayPasajeros($arrayPasajeros);
        }

        return $Pviaje;
    }

    /*Se muestran los datos de los pasajeros en forma de string, usando un recorrido exhaustivo*/
    public function toStringPasajeros()
    {
        $colPasajeros = $this->getArrayPasajeros();
        $pasajero = "";        
        
        for ($i=0; $i <count($colPasajeros) ; $i++) { 
            
            $nroPasaj = $i + 1;
            $pasajero = $pasajero . " " .$nroPasaj . "\n".
                        "Nombre: ". $colPasajeros[$i]["nombre"]. "\n". 
                        "Apellido: ". $colPasajeros[$i]["apellido"]. "\n". 
                        "Documento: ". $colPasajeros[$i]["documento"]. "\n";

        }

        return  $pasajero;

    }



    // metodo toString de la clase viaje
    public function __toString()
    {
        $cadenaPasajeros=$this->toStringPasajeros();

        $cadena = "El codigo del viaje es: ". $this->getCodigo() ."\n" .
                  "El destino es: " . $this->getDestino()."\n".
                  "La cantidad maxima de pasajeros es: ". $this->getMaximaPasajeros()."\n".
                  "Los pasajeros son:\n". $cadenaPasajeros ;

        return $cadena;            

    }



}



