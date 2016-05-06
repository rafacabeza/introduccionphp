<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 7</title>
</head><body>
<?php
//función que devuelve un valor:
//lo normal paso por valor.
function superficie($base, $altura)
{
    //los parámetros se declaran como se inidica
    //podemos incluir las sentencias necesarias
    //usamos return si queremos que la función devuelva un valor
    return $base * $altura;
}

//paso por referencia. El argumento pasado puede ser actualizado
//además en este ejemplo no har retur: no devuelve nada.
function escala(&$base, &$altura, $escala=2)
{
    $base = $base * $escala;
    $altura = $altura * $escala;
}
// otra función que no devuelve nada
function rectangulo ($base, $altura)
{
    echo "Las medidas de nuestro rectángulo son $base x $altura";    
    $base = $base + 2;
}
//vamos a usar las funciones:
$base = 6;
$altura = 3;

echo "Nuestro rectángulo: ";
rectangulo($base, $altura);
echo "<br>";

//escalamos a la mitad
escala($base, $altura, 0.5);

echo "Pero ahora:  ";
rectangulo($base, $altura);
echo "<br>";

//escalamos por defecto
escala($base, $altura);

echo "Y de nuevo:  ";
rectangulo($base, $altura);
echo "<br>";


?>

</body></html>