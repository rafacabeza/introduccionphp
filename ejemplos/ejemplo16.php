<?php
$directorio = opendir("uploads/"); //ruta actual
//obtenemos un archivo y luego otro sucesivamente
while ($archivo = readdir($directorio)) {
    //verificamos si es o no un directorio
    if (is_dir($archivo)) {
        echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    } else {
        echo $archivo . "<br />";
    }
}
