<?php
session_start();

if (!empty($_GET['numero']) || !is_numeric($_GET['numero'])) {
    

    if ($_GET['numero'] == 1 ) {
        echo "<h1>Valor correcto</h1>";
        $_SESSION['contador']++;
        echo $_SESSION['contador'];
       // header("Location:ejercicio-1.php");
        echo "numero corecto";
    } elseif($_GET['numero'] == 0){
        echo "<h1>Valor correcto</h1>";
        $_SESSION['contador']--;
       // header("Location:ejercicio-1.php");
    }
    else {
        $error = "Error en el tipo de dato";
        //header("Location:ejercicio-1.php?error=$error");
        echo "numero incorrecto";
    }

} else {
    $error = "Envié todos los datos";
    //header("Location:ejercicio-1.php?error=$error");
}

echo $_SESSION['contador'];
