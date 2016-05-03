<div id="main">

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
        <?php Format::ejemplo(4);?>

    </li>
    <li> En cualquier momento podemos añadir nuevos elementos indicando o no su 
        posición. Internamente se lleva cuenta del último elemento añadido para 
        que los nuevos ocupen las siguientes posiciones. <br>
        <?php Format::ejemplo(5);?>

    </li>
</ul>

<h3>Arrays asociativos</h3>
<p>Los arrays asociativos usan una etiqueta en lugar del número de posición.</p>
<?php Format::ejemplo(6);?>


<h3>Arrays de dos dimensiones</h3>
<p> Los elementos de un array pueden ser nuevos arrays. Esto permite recoger el 
    contenido de tablas en arrays de dos dimensiones donde cada elemento del 
    array principal es un array.</p>
<p> Los arrays de dos dimensiones pueden ser ordenados, asociativos o una mezcla
    de ambos</p>
    <?php Format::ejemplo(7);?>


    
</div>