<?php
$archivo=$_FILES['archivo'];
$nombre=$archivo['name'];
$tipo=$archivo['type'];

print_r("<pre>");
print_r($archivo);
print_r("</pre>");
die();
