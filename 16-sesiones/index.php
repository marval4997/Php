<?php

/**
 * Sesión: Almacenar y persistir datos del usuario mientras que navega
 * en un sitio web hasta que cierra sesión o cierra el navegador
 */

//iniciar sesión

session_start();
$variable_normal= "Soy ua cadena de texto";

$_SESSION['variable_persistente']="hola soy una sesion activa";

echo $variable_normal."<br>";
echo $_SESSION['variable_persistente'];


