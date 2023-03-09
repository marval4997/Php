<?php

/**
Ejercicio 1
hacer un programa en php que tenga un array de 8 numero y que haga lo siguiente:
- Recorrer y mostrarlo
- ordenarlo y mostrarlo
- Mostrar la longitud
- Buscar algún elemento
 */

$arrNumeros = array(1, 2, 4, 6, 9, 10, 15, 12);

//función para recorrer el arreglos
function imprimeArray($array)
{
    $templete = "<h1>Arreglo de numeros</h1> <br>";
    foreach ($array as $arr) {
        $templete .= $arr . "<br>";
    }

    return $templete;
}
//mostrando el arreglo
echo imprimeArray($arrNumeros);
//ordenando arreglo
sort($arrNumeros);
//mostrando arreglo ordenado
echo imprimeArray($arrNumeros);
//contando la longitud del arreglo
echo "longitud del arreglo: " . sizeof($arrNumeros) . "<br>";
//buscando un numero dentro del arreglo
if (isset($_GET['busqueda'])) {
    $busqueda = $_GET['busqueda'];
    $search = array_search($busqueda, $arrNumeros);
    echo "<h2>búsqueda del numero $busqueda</h2>";

    if (!empty($search)) {
        echo "<h4>El numero buscado si existe y esta en el indice $search</h4>";
    } else {
        echo "<h4>El numero buscado no existe</h4>";
    }

} else {
    echo "no a pasado el numero para buscar";
}
