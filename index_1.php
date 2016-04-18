<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/default.css" />        
        <title></title>
    </head>
    <body >
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
        <h2>Variables y tipos </h2>
        <p>
            Los <strong>tipos básicos</strong> son: 
        <ul>
            <li>Entero: número entero con signo 
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
    <p>Las estructuras de control son idénticas al lenguaje C</p>
    <p>Veamos un ejemplo donde se hace uso de constantes y del bucle "for"</p>


    <div class="php">
        <?php
        highlight_file('ejemplos/ejemplo03.php');
        ?>
    </div>
    <!--<p class="figura"><a href="ejemplos/ejemplo03.php">Ejemplo 3 </a></p>-->
    <p class="figura"><a href="ejemplos/ejemplo03.php">Ejemplo <?php echo ++$i ?> </a></p>

    <h2>Arrays</h2>
    <h3>Arrays ordenados</h3>
    <h3>Arrays asociativos</h3>
    <h2>Formularios y variables superglobales</h2>
    <h3>Formularios</h3>
    <h3>Otras superglobales</h3>
    <h2></h2>
    <h2></h2>
    <h2></h2>
</body>
</html>
