
<h1>Introducción al lenguaje PHP</h1>
<p>El objetivo este documento es enseñar PHP a través de ejemplos. 
    Las explicaciones de sintaxis serán mínimas, pues (salvo que se 
    indique lo contrario) la sintaxis es idéntica a la de C o Java.</p>
<p> Este es un documento mixto HTML-PHP donde el código PHP se inserta 
    dentro del HTML mediante su correspondiente etiquetado.</p>
<?php highlight_string('<?php mi_codigo_php ?>') ?>

<p>Los ficheros cuyo contenido es 100% php requieren la etiqueta de 
    apertura <em><?php highlight_string("'<?php'") ?></em> pero no la de
    cierre. <em> <?php highlight_string("'?>'") ?></em> </p>

<p>Para completar información respecto a lo que aquí se cuenta el mejor sitio
    es la documentación oficial  <a href="http://php.net/manual/es/">php.net/manual/es/<a>
</p>
<h2>Variables y tipos </h2>
<p>
    Los <strong>tipos básicos</strong> son: 
<ul>
    <li>Entero: número entero con signo </li>
    <li>Flotante: número decimal con signo </li>
    <li>Booleano: vale true o false </li>
    <li>Cadena de caracteres: cadena de caracteres delimitada por
        comillas. Las comillas simples 
        interpretan el texto literalmente, mientras que las dobles 
        sustituyen las variables.</li>                </ul>
</p>
<p>Los identicadores de <strong>variables</strong> son cadenas alfanumericas precedididas
    del carácter "$". Se usan sin declaración previa.</p>

<p>Para <strong>comentarios</strong> de unas sólo línea (o parte de ella) se pueden usar 
    indistintamente // o #. 

    Si se desean comentario de varias líneas, se abren con /* y se cierran con */ 
</p>

<p>Se imprimen con echo o print:</p>
<div class="php">
    <?php
    highlight_file('ejemplos/ejemplo01.php');
    ?>
</div>
<!--<p class="figura"><a href="ejemplos/ejemplo01.php">Ejemplo 1 </a></p>-->
<p class="figura"><a href="ejemplos/ejemplo01.php">Ejemplo <?php echo ++$i ?> </a></p>



<h2>Configuración PHP</h2>
<p>La configuración de php está registrada en el fichero php.ini y
    puede ser consultada con la función phpinfo()</p>

<div class="php">
    <?php
    highlight_file('ejemplos/ejemplo02.php');
    ?>
</div>
<!--<p class="figura"><a href="ejemplos/ejemplo02.php">Ejemplo 2 </a></p>-->
<p class="figura"><a href="ejemplos/ejemplo02.php">Ejemplo <?php echo ++$i ?> </a></p>



<h2>Constantes y sentencias de control</h2>
<p>Las constantes se declaran con la palabra reservada "define". </p>
<p>Las estructuras de control son idénticas al lenguaje C. En caso de duda se 
    recomienda revisar la documentación oficial.</p>
<p>Veamos un ejemplo donde se hace uso de constantes y del bucle "for"</p>


<div class="php">
    <?php
    highlight_file('ejemplos/ejemplo03.php');
    ?>
</div>
<!--<p class="figura"><a href="ejemplos/ejemplo03.php">Ejemplo 3 </a></p>-->
<p class="figura"><a href="ejemplos/ejemplo03.php">Ejemplo <?php echo ++$i ?> </a></p>

<h2>Arrays</h2>
<p>Los arrays son un tipo de datos que no hemos tratado al inicio porque su 
    tratamiento es algo más complejo que los tipos básicos. No obstante su 
    conocimiento y dominio resultan fundamentales para el uso común del lenguaje.
    Un array es una colección de datos. </p>

<p>En el lenguaje PHP los datos pueden ser del
    mismo tipo o no, pueden incluso ser otros arrays u objetos.</p>

<p>Según la forma de acceder a cada uno de los datos hablamos de arrays 
    ordeandos u asociativos</p>
<h3>Arrays ordenados</h3>
<p>Un array ordenado es una colección de datos donde cada uno de ellos es referenciado
    por la posición que ocupa en la misma.</p>
<p>Los arrays pueden ser inicializados de varias maneras distintas. Veamos: </p>

<ul>
    <li> En la declaración de la variable. Los dadtos van entre paréntesis y 
        separados por comas: <br>
        <div class="php">
            <?php
            highlight_file('ejemplos/ejemplo04.php');
            ?>
        </div>
        <p class="figura"><a href="ejemplos/ejemplo04.php">Ejemplo <?php echo ++$i ?> </a></p>
    </li>
    <li> En cualquier momento podemos añadir nuevos elementos indicando o no su 
        posición. Internamente se lleva cuenta del último elemento añadido para 
        que los nuevos ocupen las siguientes posiciones. <br>
        <div class="php">
            <?php
            highlight_file('ejemplos/ejemplo05.php');
            ?>
        </div>
        <p class="figura"><a href="ejemplos/ejemplo05.php">Ejemplo <?php echo ++$i ?> </a></p>
    </li>
</ul>

<h3>Arrays asociativos</h3>
<p>Los arrays asociativos usan una etiqueta en lugar del número de posición.</p>
<div class="php">
    <?php
    highlight_file('ejemplos/ejemplo06.php');
    ?>
</div>
<p class="figura"><a href="ejemplos/ejemplo06.php">Ejemplo <?php echo ++$i ?> </a></p>

<h3>Arrays de dos dimensiones</h3>
<p> Los elementos de un array pueden ser nuevos arrays. Esto permite recoger el 
    contenido de tablas en arrays de dos dimensiones donde cada elemento del 
    array principal es un array.</p>
<p> Los arrays de dos dimensiones pueden ser ordenados, asociativos o una mezcla
    de ambos</p>
<div class="php">
    <?php
    highlight_file('ejemplos/ejemplo07.php');
    ?>
</div>
<p class="figura"><a href="ejemplos/ejemplo07.php">Ejemplo <?php echo ++$i ?> </a></p>

<h2>Formularios y variables superglobales</h2>
<h3>Formularios</h3>
<h3>Otras superglobales</h3>
<h2></h2>
<h2></h2>
<h2></h2>
