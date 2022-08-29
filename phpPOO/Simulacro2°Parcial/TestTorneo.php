<?php

include "Categoria.php";
include "Equipo.php";
include "Partido.php";
include "Torneo.php";
include "Futbol.php";
include "Basket.php";

/*1. Crear un objeto de la clase Torneo donde el importe base del premio es de: 100.000 y la colección de
partidos tiene los siguientes objetos*/

$torneo = new Torneo(array(),100000);

$cat1 = new Categoria(1,"menores");
$cat2 = new Categoria(2,"juveniles");
$cat3 = new Categoria(3,"mayores");
$catBasket = new Categoria(4,"normal");

$objE1 = new Equipo(1,"cap 1",10,$cat1);
$objE2 = new Equipo(2,"cap 2",10,$cat1);
$objE3 = new Equipo(3,"cap 3",10,$cat2);
$objE4 = new Equipo(4,"cap 4",10,$cat2);
$objE5 = new Equipo(5,"cap 5",10,$cat3);
$objE6 = new Equipo(6,"cap 6",10,$cat3);

$objE7 = new Equipo(7,"cap 7",10,$catBasket);
$objE8 = new Equipo(8,"cap 8",10,$catBasket);
$objE9 = new Equipo(9,"cap 9",10,$catBasket);
$objE10 = new Equipo(10,"cap 10",10,$catBasket);
$objE11 = new Equipo(11,"cap 11",10,$catBasket);
$objE12 = new Equipo(12,"cap 12",10,$catBasket);

 
$objPart4 = new Futbol(1,'2020-10-25',3,2,$objE1,$objE2);
$objPart5 = new Futbol(2,'2020-11-13',0,1,$objE3 ,$objE4);
$objPart6 = new Futbol(3,'2020-11-30',2,3,$objE5 ,$objE6);
 
$objPart1 = new Basket(4,'2020-10-10',80,120,$objE7 ,$objE8,75);
$objPart2 = new Basket(5,'2020-10-25',81,110,$objE9 ,$objE10,70);
$objPart3 = new Basket(6,'2020-11-25',115,85,$objE11 ,$objE12,110);


/*2. Invocar al método ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo) donde OBJEquipo1 y
OBJEquipo2 son objE7 y objE11 respectivamente. La fecha es 10-11-20 y el tipo de partido es
basquetbol. Visualice el resultado. */

$torneo -> ingresarPartido($objE7,$objE11,"10-11-20","basket");
//echo $torneo;

//Invocar al método darGanadores(‘basquet’) y visualizar el resultado.
$ganadoresBasket = $torneo ->darGanadores("Basket"); 
//echo $ganadoresBasket ? print_r($ganadoresBasket) : "No hay datos";

//Invocar al método darGanadores(‘futbol’) y visualizar el resultado.
//$ganadoresFutbol = $torneo ->darGanadores("Futbol"); 
//echo $ganadoresFutbol ? print_r($ganadoresFutbol) : "No hay datos";

//Invocar al método calcularPremioPartido con cada uno de los partidos creados en el punto 1
$colPartidos = [$objPart1,$objPart2,$objPart3,$objPart4,$objPart5,$objPart6];
$torneo -> setColPartidos($colPartidos);
$premio = $torneo -> calcularPremioPartido($objPart5);
echo print_r($premio);
