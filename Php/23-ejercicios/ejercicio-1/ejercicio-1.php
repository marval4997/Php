<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de session</title>
</head>
<body>
    <h1>Contador de sessiones</h1>
<form action="./resive.php" method="GET">
    <label for="numero"></label>
    <input type="text" name="numero" id="numero">
    <br><br>

    <input type="submit" value="enviar">
</form>

<h3>el valor del contador es: <?php echo $_SESSION['contador'] ?></h3>

<?php 
if(!empty($_GET['error'])):
    echo $_GET['error'];
endif;
?>



</body>
</html>
