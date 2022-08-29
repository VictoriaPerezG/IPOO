<?php 

//probando recorridos para arreglos 
//para un recorriod de un arreglo multidimensional se puede usar un for que recorre todos los elementos del arreglo
//o un while que recorre parcialmente el arreglo hasta encontrar la condicion

$pasajeros=[];
$pasajeros[0] = ["nombre"=>"vic","apellido"=>"perez","DNI"=>"43216200","telefono"=>29567394];
$pasajeros [1]= ["nombre"=>"fede","apellido"=>"perez","DNI"=>"1638293","telefono"=>299757394];
$pasajeros [2]= ["nombre"=>"vale","apellido"=>"perez","DNI"=>"4628302","telefono"=>2999606435];
$pasajeros [3]= ["nombre"=>"fati","apellido"=>"perez","DNI"=>"5674938","telefono"=>29996064858];
$pasajeros [4]= ["nombre"=>"rox","apellido"=>"cerda","DNI"=>"24367892","telefono"=> 2999604883];

echo print_r($pasajeros,true);
echo count($pasajeros). "\n";


echo "Desea modificar algun dato de un pasajero? ";
$rta=trim(fgets(STDIN));


if($rta == "si"){

    echo "Ingrese el indice del pasajero: ";
    $indice=trim(fgets(STDIN));

    if($indice>count($pasajeros)){
        echo "no esxiste este indice dentro de la coleccion de pasajeros ";
    }else{
        echo "Indique que clave desea modificar: ";
        $key=trim(fgets(STDIN));
        echo "Ingrese nuevo dato: ";
        $modificacion=trim(fgets(STDIN));

    
    for($i=0; $i<count($pasajeros);$i++ ){
        if($key== "nombre"){
            $pasajeros[$indice]=[ $key => $modificacion];
        }
        elseif($key== "apellido"){
            $pasajeros[$indice]=[ $key => $modificacion];
        }elseif($key== "DNI"){
            $pasajeros[$indice]=[ $key => $modificacion];
        }
        elseif($key== "telefono"){
            $pasajeros[$indice]=[ $key => $modificacion];
        }
        else{
            $modificacion="No existe esta clave en el arreglo asociativo";
        }
    }
    }
}

echo print_r($pasajeros);