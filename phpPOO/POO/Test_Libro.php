<?php

include "Libro.php";

$libro1= new Libro(978,"¿Alex, quizas?",2017,"V&R","Jenn","Bennett");
echo "\n".$libro1 ."\n";

if($libro1->perteneceEditorial("V&R")){
    echo "\n Este libro pertenece a la editorial \n";
}else{
    echo "\n Este libro no pertenece a la editorial \n";
    
}

$aniosPasados=$libro1->aniosDesdeEdicion();
echo "\n Los años que han pasado desde la edicion de este libro son: " .$aniosPasados;
