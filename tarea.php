<?php
echo '======================================='."</br>";
echo 'TAREA 01'."</br>";
echo '======================================='."</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo '==================='."</br>";
echo 'VARIABLES'."</br>";
echo '==================='."</br>";
$numInt = 20;
$numFloat = 19.5;
$varString = 'Cadena';
$varBool = true;
$varArray = [0,1, 2, 3, 4, 5];
echo 'INTEGER: '.$numInt."</br>";
echo 'FLOAT: '.$numFloat."</br>";
echo 'STRING: '.$varString."</br>";
echo 'BOOLEAN: '.$varBool."</br>";
echo 'ARREGLO:'."</br>";
print_r($varArray);
echo "</br>";
echo "</br>";
echo '==================='."</br>";
echo 'CADENAS'."</br>";
echo '==================='."</br>";
$cad01 = 'Worman';
$cad02 = 'Andrade';
$cad03 = 'Clavijo';
$cad = $cad01."</br>".$cad02."</br>".$cad03;
echo 'CADENA01: '.$cad01."</br>";
echo 'CADENA02: '.$cad02."</br>";
echo 'CADENA03: '.$cad03."</br>";
echo 'CADENA CONCATENADA: '.$cad01." ".$cad02." ".$cad03."</br>";
echo 'LONGITUD CADENA: '.strlen($cad);
echo "</br>";
echo "</br>";
echo '==================='."</br>";
echo 'CONDICIONALES'."</br>";
echo '==================='."</br>";
$val01 = true;

if ($val01) {
    echo 'APRUEBA';
} else {
    echo 'REPRUEBA';
}
echo "</br>";
echo "</br>";
echo '==================='."</br>";
echo 'ARREGLOS'."</br>";
echo '==================='."</br>";
$persona = ["nombre" => "Ana","apellido" => "Andrade","edad" => 8,"pais" => "Ecuador","ciudad" => "Quito"];

foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}
?>