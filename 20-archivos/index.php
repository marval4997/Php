<?php
/*
//abrir archivo
$archivo= fopen("fichero.txt","a+");

//leer contenido
while(!feof($archivo)){
    $contenido=fgets($archivo);
    echo $contenido."<br>";
}

//escribir dentro de archivó
fwrite($archivo,"soy un texto metido desde php");

//cerrar archivo
fclose($archivo);
*/
///////////////
//copiar fichero
//copy('fichero.txt','copiado.txt') or die("Error al copiar");

//renombrar
//rename('fichero.txt','nuevo.txt') or die("error al copiar");

if(file_exists("fichero.txt")){
    echo "el archivo existe";
}else{
    echo"el archivo existe";
}
