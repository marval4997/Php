<?php

if (isset($_POST['n1']) && is_numeric($_POST['n1']) && isset($_POST['n2']) && is_numeric($_POST['n2']) && isset($_POST['operador'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operador=$_POST['operador'];


    switch ($operador) {
        case '+':
            $resultado = $n1 + $n2;
            break;

        case '-':
            $resultado = $n1 - $n2;
            break;

        case '*':
            $resultado = $n1 * $n2;
            break;

        case '/':
            $resultado = $n1 / $n2;
            break;

        default:
            $resultado= "El operador no es valido";
            break;
    }

    header("Location:ejercicio-3.php?resultado=$resultado");
}else{
    $resultado="ingrese un paramatero";
    header("Location:ejercicio-3.php?resultado=$resultado");

}
