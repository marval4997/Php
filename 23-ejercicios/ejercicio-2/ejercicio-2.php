<?php

/**
 * Ejercico 2
 * 1. una funcion
 * 2. validar un emeail con filter_var
 * 3. recoger variable por get y validar
 * 4. mostrar el resultado
 */


function validaEmail($email)
{
    $status="no valido";
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status="valido";
        
    }

    return $status;
}


if (isset($_GET['email'])) {
    print_r($_GET);
    $valiadar= validaEmail($_GET['email']);
    echo $valiadar;
} else {
    print_r($_GET);
    echo "no as ingresado un correo";
}