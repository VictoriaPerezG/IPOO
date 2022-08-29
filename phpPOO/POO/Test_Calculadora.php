<?php

include 'Calculadora.php';
$calculadora1 = new Calculadora(2,4);

echo $calculadora1 ."\n";
echo $calculadora1->getPrimero()."\n";
echo $calculadora1->getSegundo()."\n";


$suma= $calculadora1->Suma();
echo "La suma es: ".$suma."\n";

$resta= $calculadora1->Resta();
echo "La resta es: ".$resta."\n";

$division = $calculadora1->Division();
echo "La div es: ".$division."\n";

$multi= $calculadora1->Multiplicacion();
echo "La multiplicacion es: ".$multi."\n";


$calculadora2= new Calculadora(20,3);
echo $calculadora2->getPrimero()."\n";
echo $calculadora2->getSegundo()."\n";
echo $calculadora2;
