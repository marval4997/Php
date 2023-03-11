<?php

/**
 * para mostar el valor de las cookies , tengo que usar una variable super global
 * en un array asociativo
 */

if ($_COOKIE['micookie']) {
    echo $_COOKIE['micookie'];
} else {
    "ni esxiste la cookie";
}

if($_COOKIE['unyear']){
    echo $_COOKIE['unyear'];
} else {
    "ni esxiste la cookie";
}

?>

<a href="borrar_cookie.php">borrar cookies</a>
