<?php

/**
Ejercicio 3. programa que compruebe si una variable esta vacía y si esta vacía
rellenarla con texto en minúsculas y mostrarlo en mayúsculas
 */

$texto = "";

if(empty($texto)){
    $texto="texto";
    $textoMayus=strtoupper($texto);
    echo "<strong>$textoMayus</strong>" ;
}else{
    echo "la variable tiene este contenido dentro".$texto;
}