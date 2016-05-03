<div id="main">


<h1>Introducción al lenguaje PHP</h1>
<h2>
  Declaración de intenciones 
</h2>
<p>El objetivo esta documentación es ayudar al aprendizaje rápido del lenguaje 
    PHP por parte de estudiantes de 2º curso de Desarrollo de Apliaciones Web. 
    No obstante pueden ser útiles por aquellos que ya conozcan otros lenguajes 
    de programación como JAVA, C++ o C#.
    Por este motivo se omitirá mucho contenido teórico sobre lo que es un 
    lenguaje de programación orientado a objetos.
    Igualmente, las explicaciones de sintaxis serán mínimas, pues la sintaxis es
    muy parecida a los citadso lenguajes.</p>


<p>Para completar información respecto a lo que aquí se cuenta el mejor sitio
    es la documentación oficial  <a href="http://php.net/manual/es/"> php.net/manual/es/ </a>
</p>



<h2>Operadores</h2>
<p>Los operadores son en general iguales a C o Java. Podemos 
    revisar la documetación oficial en: <br>
 <a href="http://php.net/manual/es/language.operators.php">
    http://php.net/manual/es/language.operators.php</a></p>
    
    <p> No obstante vamos a remarar algunos casos especiales</p>
    <ul>
        <li>El operador "." sirve para concatenar textos.</li>
        <li>Además de los comparadores == y != existen los operadores === y !==.
        El operador === devuelve true si el valor y el tipo de 
        datos son iguales. El operador !== devuelve true si el valor o el tipo
        de datos son distintos.
        </li>
        <li> De manera similar al operador "+=" Tenemos el operador ".="</li>
        
        
    </ul>
    <?php Format::ejemplo(0);?>



<p> Este es un documento mixto HTML-PHP donde el código PHP se inserta 
    dentro del HTML mediante su correspondiente etiquetado.</p>

<?php highlight_string('<?php mi_codigo_php ?>') ?>

<p>Los ficheros cuyo contenido es 100% php requieren la etiqueta de 
    apertura <em><?php highlight_string("'<?php'") ?></em> pero no la de
    cierre. <em> <?php highlight_string("'?>'") ?></em> </p>



<h2>Configuración PHP</h2>
<p>La configuración de php está registrada en el fichero php.ini y
    puede ser consultada con la función phpinfo()</p>

<?php Format::ejemplo(1);?>

</div>