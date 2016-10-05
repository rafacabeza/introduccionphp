<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../public/css/default.css" />        
        <title></title>
    </head>
    <body >
        <h1>Posibles contenidos extra</h1>
        <h3>Printf</h3>
        <h3>Escape</h3>
        <h3>Funciones relacionadas con tipos de datos</h3>
        <p>El <b>juego completo</b> de tipos de datos de php es array, boolean, double, 
            integer, object, string, null y resource.</p>
        <p>La función <b>gettype</b> nos devuelve una cadena de texto con el tipo
            correspondiente. Nos dará un texto de la anterior lista o unknown type.</p>
        <p>Podemos <b>comprobar el tipo</b> de una variable mediante el juego de funciones:
            is_array(), is_bool(), is_float(), is_integer(), is_null(), 
            is_numeric() , is_object() ,is_resource() , is_scalar() e is_string() . 
            Devuelven true si la variable es del tipo indicado.</p>

        <p>Podemos <b>forzar el tipo</b> de una variable metiéndola en el molde 
            correspondiente, en inglés haciendo un <em>casting</em> o mediante
            la función settype.</p>

        <div class="php">
            <?php
            highlight_file('ejemplos/extra01.php');
            ?>
        </div>

        <p>Y su resulatado seria:</p>

        <div class="php">
            <?php
            include('ejemplos/extra01.php');
            ?>
        </div>    
            
        <p>Además podemos comprobar si una variable existe on o con isset(). 
            Una función parecida es empty() que devuelve true si la variable 
            existe pero su valor es null;
        </p>



        <div class="php">
            <?php
            highlight_file('ejemplos/extra02.php');
            ?>
        </div>

        <p>Y su resulatado seria:</p>

        <div class="php">
            <?php
            include('ejemplos/extra02.php');
            ?>
        </div>   

        <h3></h3>
        <h3></h3>
        <?php
        ?>
    </body>
</html>