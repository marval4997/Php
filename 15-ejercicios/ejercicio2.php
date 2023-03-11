<?php

/**
Escribir un programa que añada valores a un array 
mientras que su longitud sea menor a 120 y mostrarlo 
 */



function agregarValores($arrValores){

    if(count($arrValores)==120){
        // $mostrar="<h2>AREGLO</h2><br>(<br>";
        // $contador=1;
        // foreach($arrValores as $arr){
        //     $mostrar.=$arr.",";
        //     if($contador==10){
        //         $mostrar.= "<br>";
        //         $contador=0;

        //     }
        //     $contador++;
        // }
        // $mostrar.=")<br>la longitud del arreglo es: ".count($arrValores);
        return $arrValores;

    }else{
        
        $valor=mt_rand(0,200);
        array_push($arrValores,$valor);
        return agregarValores($arrValores);
    }
}

$array=[];
print_r("<pre>"); 
print_r(agregarValores($array));
print_r("</pre>");