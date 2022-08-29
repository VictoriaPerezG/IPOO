<?php
include "AlumnoFai.php";

function Test_Crear_Alumno(){
    $objAlumno= new AlumnoFai("DNI 35123456", "Damien", "Thorn", "98765");
    echo $objAlumno;
}

function main(){
    Test_Crear_Alumno();
}
main();