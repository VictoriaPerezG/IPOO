<?php

include "CuentaBancaria2.php";
include "Persona.php";

$persona= new Persona("Victoria","Perez","DNI",43216200);
$cuenta = new CuentaBancaria(1,$persona,500,1);
echo $cuenta ."\n";

//cambio el dni de la persona dentro de la clase cuenta bancaria
$objPersona= $cuenta->getObjPersona();//a la variable le paso el obj persona de la cuenta bancaria 
$objPersona->setNumero(12345678);//le seteo el numero de dni 
$cuenta->setObjPersona($objPersona);//le seteo el nuevo objeto persona con el dni modificado pero los demas datos iguales
echo $cuenta."\n";//visualizo el objeto cuenta bancaria

//creo un nuevo obj persona para pasarcelo por set a la clase cuenta bancaria
$nuevaPersona= new Persona ("Roxana","Cerda","DNI",34567890);
$cuenta->setObjPersona($nuevaPersona);
echo $cuenta;


