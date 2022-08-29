<?php

/*Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la
 información del viaje, modificar y ver sus datos.*/

include "Viaje.php";

///////////DATOS PRE CARGADOS////////////////

//creo el arreglo asociativo de pasajeros
$pas1 = ["nombre" => "Daniela", "apellido" => "Rojas","documento" => 1234];
$pas2 = ["nombre" => "Mariela", "apellido" => "Gomez","documento" => 5678];
$pas3 = ["nombre" => "Roxana", "apellido" => "Perez","documento" => 9087];

//creo el arreglo indexado con los arreglos asociativos anteriores 
$pasajeros=[$pas1,$pas2,$pas3];
//echo print_r($pasajeros);

//inicializo la clase viaje 
$viaje1 = new Viaje(100,"Bariloche",25,$pasajeros);
echo $viaje1."\n\n";


/**************uso de los set para cambiar los valores*****************/
//presente un menú que permita cargar la información del viaje, modificar y ver sus datos
do{
    echo "\nMenu del Viaje \n";
    echo "Si desea modificar algun dato ingrese la opcion indicada:(1)ver datos viaje, (2)modifica datos, (3)modificar pasajeros, (x)salir\n ";
    echo "Ingrese una opcion: \n";
    $opcion= trim(fgets(STDIN));

    if ($opcion==1) {
        echo "Los datos del viaje son: \n";
        echo $viaje1."\n";
    }
    elseif ($opcion == 2) {

        echo $viaje1."\n";
        //modifico el codigo del viaje
        echo "Ingrese un nuevo codigo de viaje: ";
        $newId = trim(fgets(STDIN));
        $viaje1->setCodigo($newId);
        //modifico el destino del viaje
        echo "Ingrese el nuevo destino del viaje: ";
        $newDestino = trim(fgets(STDIN));
        $viaje1->setDestino($newDestino);
        //modifico la cantidad maxima de pasajeros para el viaje
        echo "Ingrese la nueva cantidad maxima de pasajeros para el viaje: ";
        $newCantMax = trim(fgets(STDIN));
        $viaje1->setMaximaPasajeros($newCantMax);
        echo $viaje1."\n";
        
    }
    elseif ($opcion==3) {

        //muestro los datos pre cargados de los pasajeros
        $cadena= $viaje1->toStringPasajeros();
        echo $cadena."\n";

        //modificar datos de un pasajero
        echo "Ingrese el numero del pasajero que desea modificar \n";
        $num = trim(fgets(STDIN));
        echo "Ingrese el documento del pasajero que desea modificar \n";
        $doc = trim(fgets(STDIN));
        echo "Ingrese el nombre nuevo del pasajero\n";
        $nomNew = trim(fgets(STDIN));
        echo "Ingrese el apellido nuevo del pasajero\n";
        $apellidoNew = trim(fgets(STDIN));
        echo "Ingrese el nuevo documento del pasajero que desea modificar\n ";
        $docNew = trim(fgets(STDIN));
        $viaje1->ModificarDatosPasajero($num,$doc,$nomNew,$apellidoNew,$docNew);
        $cadena= $viaje1->toStringPasajeros();
        echo $cadena;
    }
    else {
        echo "Saliendo del menu....";
    }
    


}while ( ($opcion>=1) && ($opcion<=3) );














   


