<?php

$a = "Hola mundo";
$b = 3;
$c = 2.5;

//function
function miFunction(){
    global $a, $b;
    $a= "Cambiar texto";
}

miFunction();
echo $a;

//concatenacion se realiza con puntos, en lugar de signo mas
//echo $a . " " . $b . " ". $c;

//Arreglos
$array_1 = array();
$array_2 = array();

$array_1[] = 1;
$array_1[] = 2;
$array_1[] = "hola";

var_dump($array_1);

$array_2['clave'] = 261850;
$array_2['nombre'] = "juan";
$array_2['apellido'] = "vazquez";

//var_dump($array_2);




//Json
$json = '{"clave":"161850", "nombre":"juan", "apellido":"vazquez"}';
//$json = json_encode($alumno);
$alumno_aux = json_decode($json);

//echo $alumno_aux->clave;

//Clases
class Aux {
    public $x;
    public $y;
}

$aux = new Aux();

$aux-> = "Valor X";

var_dump($aux);


?>