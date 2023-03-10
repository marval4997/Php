<?php

/**
* crear un array con el contenido de la tabla:
* ACCIÓN   AVENTURA    DEPORTES
* GTA      ASSASINS    FIFA 18 
* COD      CRASH       PES 19
* PUBG     PRICE OF    MOTO GP 19
*          PERSIA 
*/

$arrJuegos=array(
    "ACCION"=>array("GTA 5", "COD", "PUBG"),
    "AVENTURA"=>array("ASSASINS", "CRASH", "PRICE OF PERSIA"),
    "DEPORTES"=>array("FIFA 19", "PES 19", "MOTO GP 19")
);

$indices=array_keys($arrJuegos);

?>

<table>
    <tr>
        <?php
        foreach($indices as $key){
            echo "<th>$key</th>";
        }
        ?>
    </tr>
</table>
