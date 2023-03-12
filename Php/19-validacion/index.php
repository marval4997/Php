<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación del formulario</title>
</head>
<body>
    <h1>Validar formularios en php</h1>

    <?php 
    //echo $_GET['errores'];
    if(isset($_GET['errores'])){
        $error=$_GET['errores'];
        if($error=="faltan_datos"){
            echo '<strong style="color:red">introduce todos los campos del formulario</strong>';
        }
        if($error=="nombre"){
            echo '<strong style="color:red">introduce todos el campo nombre</strong>';
        }
        if($error=="apellido"){
            echo '<strong style="color:red">introduce todos el campo apellido</strong>';
        }
        if($error=="edad"){
            echo '<strong style="color:red">introduce todos el campo edad</strong>';
        }
        if($error=="email"){
            echo '<strong style="color:red">introduce todos el campo correo</strong>';
        }
        if($error=="password"){
            echo '<strong style="color:red">introduce todos el campo password</strong>';
        }
    }
    ?>

    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" require="require" pattern="[a-zA-Z]+">
        <br><br>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="Tu apellido" require="require" pattern="[a-zA-Z]+">
        <br><br>

        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad" placeholder="Tu edad" require="require" pattern="[0-9]+">
        <br><br>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Tu email" require="require">
        <br><br>

        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" placeholder="Tu password" require="require">
        <br><br>

        <input type="submit" value="enviar">
    </form>
</body>
</html>