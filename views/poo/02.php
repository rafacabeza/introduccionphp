<div id="main">
    <?php include "views/poo/00.php";?>
    <h2>Primera clase</h2>
    <p>Vamos a ver algunas cuestiones que debemos considerar:</p>
    <ul>
        <li> De acuerdo a las recomendaciones de codificación Zend, cada clase
        se guarda en un fichero separado.</li>
        <li>El nombre de la clase seguirá una nomenclatura CamelCase. No se deben
        usar guiones. El nombre del fichero seguirá la misma regla.</li>
        <li>La palabra reservada para la declaración es <strong>class</strong>.</li>
        <li>Los atributos y funciones pueden tener los modificadores de 
            visibilidad <em>public</em> (por defecto), <em>private</em>.
            <em>protected</em></li>
    </ul>
    Veamos un ejemplo de clase muy sencillo.
    
    <?php Format::ejemplo(12);?>

    <p>Observemos algunas cuestiones.</p>
    <ul>
        <li>
            Para crear ejemplares de una clase usamos <strong>new</strong>.
        </li>
        <li>
            Para acceder a métodos y atributos debemos usar 
            <strong>-></strong>.
        </li>
        <li>
            El método constructor debe nombrarse <strong>_construct()</strong>. 
            Puede recibir o no argumentos.
        </li>
        
    </ul>
    
    <p>Además de acuerdo al estándar de notación Zend.</p>
    <ul>
        <li>
            Los atributos y métodos se nombrarán 
            en estilo camelCase, es decir la primera en minúsculas.
        </li>
        <li>
            Si la visibilidad es privada o protegida se hará comenzar con guión
            bajo (_camelCase).
        </li>
        <li>
            Las llaves de clase y función comenzarán en nueva línea.
            <?php Format::ejemplo(13);?>
        </li>
    </ul>
    
    <?php


    ?>    
</div><div>
    