<?php
if (!is_dir('directorio')) {
    mkdir("directorio", 0777) or die("no se puede crear la carpeta");
}else{
    echo "la carpeta ya existe";
}

//eliminar carpeta
//rmdir("directorio");
echo "<hr>";

if($gestor = opendir('./directorio')){
    while(false !== ($archivos=readdir($gestor))){
        if($archivos != '.' && $archivos !='..'){
            echo $archivos."<br>";
        }
    }

}

