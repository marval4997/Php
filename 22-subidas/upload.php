<?php
$archivo=$_FILES['archivo'];
$nombre=$archivo['name'];
$tipo=$archivo['type'];

if($tipo=="image/jpge" || $tipo=="image/png"|| $tipo=="image/jpg" || $tipo=="image/gif"){
    if(!is_dir('images')){
        mkdir('images',0777);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    
    echo "si";
    header("Refresh: 5; URL=index.php");
    

}else{
    //echo "<h1>Sube una imagen con un formato valido</h1>";
    header("Refresh: 5; URL=index.php");
    
}

print_r("<pre>");
print_r($archivo);
print_r("</pre>");
die();
