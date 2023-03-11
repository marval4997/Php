<?php

/**
    Ejercicio 4: Crear un script que tenga 4 variables, un ade tipo array,
    otra de tipo string, otra int y otra booleana y que imprima un mensaje
    según el tipo de variable
 */

function tipoVariable($variable)
{
    return "la variable es de tipo". gettype($variable)."<br>";
}

$array=[1,2,3];
$string="texto";
$int=10;
$bool=true;

echo tipoVariable($array);
echo tipoVariable($string);
echo tipoVariable($int);
echo tipoVariable($bool);
