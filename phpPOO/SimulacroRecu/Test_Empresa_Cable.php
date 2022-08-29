<?php
/*6. Implementar un script Test_Empresa_Cable donde:
a) Se crea 1 instancia de la clase Empresa_Cable.
b) Se crean 3 instancias de la clase Canal.
c) Se crean 2 instancias de la clase Planes, cada una de ellas con su código propio que hacen
referencia a los canales creados anteriormente (uno de los códigos de plan debe ser 111).
d) Crear una instancia de la clase Cliente
e) Se crean 3 instancias de Contratos, 1 correspondiente a un contrato realizado en la empresa y 2
realizados via web.
f) Invocar con cada instancia del inciso anterior al método calcularImporte y visualizar el resultado.*/

include "Canales.php";
include "Cliente.php";
include "Contrato.php";
include "EmpresaCable.php";
include "Oficina.php";
include "Planes.php";
include "ViaWeb.php";

$empresa = new EmpresaCable(array(),array()); 

$canal1 = new Canales('noticias',100,'si');
$canal2 = new Canales('infantil',100,'no');
$canal3 = new Canales('deportivo',100,'si');

$canales = [$canal1,$canal2,$canal3];

$plan1 = new Planes(111,$canales,2000);
$plan2 = new Planes(112,$canales,1500);

$cliente = new Cliente(4321200,'vic','perez',11);

$contrato1 = new Oficina(12,30,$plan1,'al dia',0,'-',$cliente);
//$importe = $contrato1->calcularImporte();
//echo $importe;
$contrato2 = new ViaWeb(30,10,$plan2,'al dia',0,'no',$cliente);
//$importe = $contrato2->calcularImporte();
//echo $importe;
$contrato3 = new ViaWeb(2,30,$plan1,'al dia',0,'si',$cliente);
//$importe = $contrato3->calcularImporte();
//echo $importe;

$planes = [$plan1,$plan2];
//$contratos = [$contrato1,$contrato2,$contrato3];
$empresa->setColPlanes($planes);
//$empresa->setColContratos($contratos);*/
//echo $empresa;
$empresa->incorporarContrato($plan1,$cliente,15,5,false) ? "si se incorporo el plan" : 'no se incorporo el plan';
$empresa->incorporarContrato($plan2,$cliente,15,5,true) ? "si se incorporo el plan" : 'no se incorporo el plan';

$empresa ->pagarContrato($contrato3); 
/*
m) invoca al método retornarImporteContratos con el código 111.*/
$id = $plan1 ->getCodigo();
echo $empresa->retornarImporteContratos($id);




