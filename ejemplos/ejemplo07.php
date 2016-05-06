<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 7</title>
</head><body>
<?php
//inicializamos
echo 'Array ordenado doble inicializado en la declaración <hr>';
$ciudades = array (
    'Zaragoza' => array(
        'poblacion' => 700000,
        'gentilicio' => 'Zaragozano'
    ), 
    'Madrid' => array(
        'poblacion' => 3000000,
        'gentilicio' => 'Madrileño'
    ), 
    'Barcelona' => array(
        'poblacion' => 3000000,
        'gentilicio' => 'Barcelonés'
    ), 
    'Bilbao' => array(
        'poblacion' => 500000,
        'gentilicio' => 'Bilbaino'
    ), 
);
?>

Recorrido mediante bucle foreach doble <br>
<table>
<tr><td>Ciudad</td><td>Población</td><td>Gentilicio</td></tr>
<?php
foreach ($ciudades as $ciudad=>$datos){    
    echo '<tr>';
    echo "<td> $ciudad </td>";
    foreach ($datos as $clave=>$dato){
        echo "<td> $dato </td>";
    }
    echo '</tr>';
}
?>
</table>
</body></html>