<?php 

/*g) Crear un script Test_CuentaBancaria que cree un objeto CuentaBancaria e invoque a cada uno
de los métodos implementados*/


include "CuentaBancaria.php";

$cuenta1= new CuentaBancaria(1,43216200,500,0.75);
echo $cuenta1 ."\n";


$saldoInt= $cuenta1->actualizarSaldo();
echo "El saldo de la cuenta aplicado con interes es del :".$saldoInt."\n";
echo "\n";
echo $cuenta1 ."\n";

$saldoNuevo=$cuenta1->depositar(400);
echo "El nuevo saldo de la cuenta es: ".$saldoNuevo."\n";
echo "\n";
echo $cuenta1."\n";



if($cuenta1->retirar(100)){
    echo "Se retiro saldo, el saldo actual es de: ".$cuenta1->getSaldo()."\n";
}else{
    echo "No se puede retirar el monto ingresado, el saldo actual es de: ".$cuenta1->getSaldo()."\n";
}
echo "\n";
echo $cuenta1;