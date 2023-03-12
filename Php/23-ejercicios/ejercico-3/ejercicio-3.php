
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <h1>Calculadora</h1>

    <form action="calcular.php" method="POST">
        <label for="n1">Valor 1</label>
        <input type="text" name="n1" id="n1">
        <br><br>

        <label for="n2">Valor 2</label>
        <input type="text" name="n2" id="n2">
        <br><br>

        <label for="operador">operador</label>
        <input type="text" name="operador" id="operador">
        <br><br>

        <input type="submit" value="calcular">
    </form>

    <?php
    if(isset($_GET['resultado']) && is_numeric($_GET['resultado'])){
        $resultado=$_GET['resultado'];
        echo "<h3>El resultado de la operacion es: $resultado</h3>";
    }else{
        echo "<h3>Llena todos los campos</h3>";
    }
    ?>
</head>
<body>
    
</body>
</html>