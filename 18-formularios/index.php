<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/from-data">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <input type="submit" value="enviar">
        <br><br>
        <label for="button">boton</label>
        <input type="button" value="boton" id="button">
        <br><br>

        <label for="sexo">sexo</label>
        <input type="checkbox" name="sexo" value="hombre" id="">
        <input type="checkbox" name="sexo" value="mujer"id="">
        <br><br>

        <label for="color">color</label>
        <input type="color" id="color">
        <br><br>

        <label for="date">fechas</label>
        <input type="date" name="date" id="date">
        <br><br>

        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <br><br>

        <label for="file">Archivo</label>
        <input type="file" name="file" id="file">
        <br><br>

        <label for="hidden">hidden</label>
        <input type=="hidden" name="hidden" id="hidden">
        <br><br>

        <label for="number">numero</label>
        <input type="number" name="number" id="number">
        <br><br>

        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <br><br>

        <label for="radio">radio</label>
        <input type="radio" name="radio" id="" value="america latina">
        <br><br>

        <label for="tel">telefono</label>
        <input type="tel" name="tel" id="tel">
        <br><br>

        <label for="url">url</label>
        <input type="url" name="url" id="url">
        <br><br>

        <textarea name="" id="" cols="30" rows="10">texto grande</textarea>
        <br><br>

        peliculas:
        <select name="" id="">
            <option value="">Spiderman</option>
            <option value="">Spiderman</option>
            <option value="">Spiderman</option>
        </select>
    </form>
</body>
</html>