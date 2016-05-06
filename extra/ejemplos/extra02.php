<?php
$variable = null; 
if (isset($variable)){
    echo 'La variable existe y no es null';
}
if (empty($variable)){
    echo 'La variable está vacía';
}

$variable = null; 
if (isset($variable)){
    echo 'La variable existe y no es null';
}
if (empty($variable)){
    echo 'La variable está vacía';
}
?>