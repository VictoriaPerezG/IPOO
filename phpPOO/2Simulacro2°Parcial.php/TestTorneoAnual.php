<?php

include "Categoria2.php";
include "Equipo2.php";
include "Partido2.php";
include "Torneo2.php";
include "Provinciales.php";
include "Nacionales.php";
include "MinisterioDeporte.php";


$cat = new Categoria(1,"normal");

$objE1 = new Equipo(1,"cap 1",10,$cat);
$objE2 = new Equipo(2,"cap 2",10,$cat);
$objE3 = new Equipo(3,"cap 3",10,$cat);
$objE4 = new Equipo(4,"cap 4",10,$cat);
$objE5 = new Equipo(5,"cap 5",10,$cat);
$objE6 = new Equipo(6,"cap 6",10,$cat);

$objE7 = new Equipo(7,"cap 7",10,$cat);
$objE8 = new Equipo(8,"cap 8",10,$cat);
$objE9 = new Equipo(9,"cap 9",10,$cat);
$objE10 = new Equipo(10,"cap 10",10,$cat);
$objE11 = new Equipo(11,"cap 11",10,$cat);
$objE12 = new Equipo(12,"cap 12",10,$cat);


$objPart1 = new Partido(1,'13-03-20',80,120,$objE7 ,$objE8);
$objPart2 = new Partido(2,'14-03-20',81,110,$objE9 ,$objE10);
$objPart3 = new Partido(3,'15-03-20',115,85,$objE11 ,$objE12);

$objPart4 = new Partido(4,'16-03-20',3,2,$objE1 ,$objE2);
$objPart5 = new Partido(5,'17-03-20',0,1,$objE3 ,$objE4);
$objPart6 = new Partido(6,'18-03-20',2,3,$objE5 ,$objE6);

//2. Crear una colección de partidos Provinciales con los partidos: $objPart1, $objPart1 y $objPart1.
$ColPartidos_p1 = [$objPart1,$objPart1,$objPart1];
$tornProv = new Provinciales(1,$ColPartidos_p1,10000,'nqn','nqn');
print_r($tornProv->obtenerEquipoGanadorTorneo());
//echo $tornProv."\n\n";

//3. Crear una colección de partidos Nacionales con los partidos: $objPart4, $objPart5 y $objPart6.
$ColPartidos_p2 = [ $objPart4, $objPart5 , $objPart6];
$tornNac = new Nacionales(2,$ColPartidos_p2,10000,'nqn');
//echo $tornNac."\n\n";

//4. Crear una instancia de la clase MinisterioDeporte.
$minDep = new MinisterioDeporte(2020,array());

/*5. Invocar al método registrarTorneo($ColPartidos_p2,’provinciales’,$ArrayAsociativo) y visualizar el
resultado.*/
$minDep->registrarTorneo($ColPartidos_p2,'provincial',$ArrayAsociativo = ['id'=>1,'monto'=>20000,'localidad'=>'cp','provincia'=>'rn']);
//echo $minDep;

/*6. Invocar al método registrarTorneo($ColPartidos_p3,’nacionales’,$ArrayAsociativo) y visualizar el
resultado.*/
$minDep->registrarTorneo($ColPartidos_p1,'nacional',$ArrayAsociativo = ['id'=>2,'monto'=>30000,'localidad'=>'nqn']);
//echo $minDep;


/*7. Con los id, de la instancia de la clase Torneo retornada en el punto 5, invocar al método
otorgarPremioTorneo($idTorneo_5) y visualizar el resultado.*/
$ganador = $minDep->otorgarPremioTorneo(1,'Provinciales');
//echo print_r($ganador);

/*8. Con los id, de la instancia de la clase Torneo retornada en el punto 5, invocar al método
otorgarPremioTorneo($idTorneo_6) y visualizar el resultado.*/