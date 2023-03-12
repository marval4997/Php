<?php
$errores = true;
if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = intval($_POST['edad']);
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!is_string($nombre) || !preg_match("/[a-zA-Z]+/", $nombre)) {
        $errores='nombre';
    }
    if (!is_string($apellido) || !preg_match("/[a-zA-Z]+/", $apellido)) {
        $errores='apellido';
    }
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $errores='edad';
    }
    if (!is_string($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores='email';
    }
    if (!is_string($pass) || strlen($pass)<5) {
        $errores='password';
    }
} else {
    $errores = "faltan_datos";
    header("Location:index.php?errores=$errores");
}

if($errores !="ok"){
    header("Location:index.php?errores=$errores");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>