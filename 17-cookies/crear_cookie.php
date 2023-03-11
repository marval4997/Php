<?php

/**
 * Cookie: Es un fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o rastrear el comportamiento del mismo
 * en al web
 */

//crear cookie
//setcookie("name", "solo puede ser texto", caducuidad, ruta, dominio);

setcookie("micookie", "valor de mi galleta");

//set cookie con expiracion
setcookie("unyear","valor de mi cookie de 365 dias",time()+(60*60*24*365));

?>

<a href="ver_cookies.php">ver la cookies</a>
