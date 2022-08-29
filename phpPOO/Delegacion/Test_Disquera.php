<?php

include "Disquera.php";
include "Persona.php";

$persona= new Persona("Victoria","Perez","DNI",43216200);
$disquera= new Disquera(9.00,20.00,"Abierta","Gatica 1210",$persona);
echo  $disquera."\n";

/*
$horario= $disquera->dentroHorarioAtencion(20.00,00.30);
if($horario){
    echo "La disquera esta abierta en este horario \n";
}else{
    echo "La disquera esta cerrada en este horario \n";

}

echo "\n" .$disquera."\n"; 

$estado=$disquera->cerrarDisquera(21.00,00.30);
echo "El estado de la disquera en este horario es ".$estado;
echo "\n" .$disquera."\n"; 

$estado=$disquera->abrirDisquera(21,00.30);
echo "El estado de la disquera en este horario es ".$estado."\n";
echo "\n" .$disquera."\n";*/