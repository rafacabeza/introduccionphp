<?php
/* 
 * Ejemplo 1
 * Uso de variables. 
 * Mostrar información con echo y print.
 * Esto es un comentario multilinea
 */
//Este de una sóla línea
#Este también pero es menos usado

$variable = 5 ;
echo 'Nuestra  variable vale: ' . $variable . '<br>'; //Con puntos
print 'Nuestra  variable vale: ' . $variable . '<br>';//Con puntos

echo 'Nuestra  variable vale: ' , $variable , '<br><hr>'; //Con comas

$anInteger = 3;
$aFloat = 3.1416;
$oneString = "Hola ";
$otherString = 'mundo';
$oneBoolean = true; // o false, recomendación Zend, en minúsculas.
print($oneString . $otherString . '<hr>');

//podemos usar texto con comillas simples y dobles.
//más habitual las simples y dejamos las dobles para el html
//sin embargo las dobles permiten embeber variables en cadenas de texto:
echo  "Un numero entero es $anInteger <br>";
echo 'Un numero entero es $anInteger <br>';

/* 
 * Nosotros usaremos el standar de codificación de Zend. 
 * Iremos viendo sus recomendaciones:
 * Variables con estilo "$camelCase".
 * Las concatenaciones con espacios a ambos lados del punto
 */
