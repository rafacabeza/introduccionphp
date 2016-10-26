<?php
$subido = true;
$uploadedfile_size = $_FILES['ficheroSubido'][size];
echo $_FILES['ficheroSubido']['name'];
if ($_FILES['ficheroSubido']['size'] > 200000) {
    $msg = $msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<br>";
    $subido = false;
}

if (!($_FILES['ficheroSubido']['type'] =="image/jpeg" || $_FILES['ficheroSubido']['type'] =="image/gif")) {
    $msg = $msg." Tu archivo tiene que ser JPG o GIF.<br>";
    $subido = false;
}
$file_name = $_FILES['ficheroSubido']['name'];
$add="uploads/$file_name";
if ($subido) {
    if (move_uploaded_file($_FILES['ficheroSubido']['tmp_name'], $add)) {
        echo " Ha sido subido satisfactoriamente";
    } else {
        echo "Error al subir el archivo";
    }

} else {
    echo $msg;
}
