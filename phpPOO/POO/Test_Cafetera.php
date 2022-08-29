<?php

include 'Cafetera.php';
$cafe1= new Cafetera(40,40); 
echo $cafe1;
$agregarCafe= $cafe1->agregraCafe(32);
echo $cafe1->getCantidadActual();
