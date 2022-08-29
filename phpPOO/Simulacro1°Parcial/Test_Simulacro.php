<?php

include "PersonaS.php";
include "Cuota.php";
include "Prestamo.php";
include "Financiera.php";

$persona= new Persona("Victoria","Perez", 43216200, "Gatica 1210", "vickypg@gmail.com", 2996080887, 1000);
echo "\n". $persona ."\n";

$cuota=new Cuota(1,250,25);
//$cuota->setCancelada(true); si se deja la cuota cancelada se llama a este metodo
echo "\n". $cuota ."\n";
$montoFinal=$cuota->darMontoFinal();
echo "\n El monto final de la cuota es: ". $montoFinal ."\n";

$prestamo = new Prestamo(1,5000,5,0.1,$persona);
echo "\n". $prestamo ."\n";






 