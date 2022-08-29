<?php

include "ViajesTerrestres.php";

include "Pasajeros.php";
include "ResponsableV.php";

//creo los objetos pasajeros
$pasajeros1 = new Pasajeros("Agustin","Gomez",43216200,2995673947);
$pasajeros2 = new Pasajeros("Federico","perez",24366736,2996080887);
$pasajeros3 = new Pasajeros("Gabriela","Garate",75849308,2956739469);
$pasajeros4 = new Pasajeros("Graciela","rojas",36748905,2959465484);

//creo un objeto responsable del viaje
$respon = new ResponsableV(123,156,"pepe","aguello");

///////////DATOS PRE CARGADOS////////////////

//creo el arreglo indexado con los objetos persona
$pasajeros=[$pasajeros1,$pasajeros2,$pasajeros3,$pasajeros4];


$viajeTerr = new ViajesTerrestres(100,"Bariloche",10,$pasajeros,$respon,400,"no","semicama" );


$pasajero = new Pasajeros("juan","perez",5678492,299084659);
echo ($viajeTerr->venderPasaje($pasajero))? "Se agrego pasajero \n ": "no se agrego pasajero \n";
echo $viajeTerr->getImporte()."\n\n";
//echo $viajeTerr;
