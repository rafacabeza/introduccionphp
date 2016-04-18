<?php
$pi = "3.1416"; 
$pi2 = $pi;// asignamos a las dos variables la misma cadena de texto
settype($pi2, "double"); // y cambiamos $b a tipo float
print "\$pi vale $pi y es de tipo " . gettype($pi);
print "<br />";
print "\$pi2 vale $pi2 y es de tipo " . gettype($pi2);
print "<br />";
echo '¿Es de tipo decimal? ' . is_double($pi2);
print "<br />";
echo '¿Es de tipo texto? ' . is_string($pi2) ;
if(!is_string($pi2)){ 
    echo 'no, es texto';
}
?>