<div id="main">
    <?php include "views/mvc/00.php";?>
    
    <h2>El controlador frontal</h2>
    <p>
    En una apliación de escritorio, la entrada de ejecución es única.
    En java, por ejemplo, es la función main de la clase principal.
    </p>
    <p>Esa clase desempeña la función de controlador frontal. Es la que 
    recoge la información de entrada recibida para determinar qué clase 
    controladora debe gestionar en cada caso las peticiones recibidas.</p>
    <p>
        En el caso de una aplicación web debemos hacer algo parecido. Nuestro 
        punto de entrada será el fichero <em>index.php </em> de inicio.
        El index debe crear un objeto de la clase Bootstrap que es el 
        controlador frontal, la clase de entrada.
    </p>
    
    <?php Format::codigoFichero('framework/v01/index.php');?>
    <?php Format::codigoFichero('framework/v01/app/Bootstrap.php');?>
    
    <p>
        En este  <a href="<?php echo Config::HOST;?>framework/v01/">enlace</a>
        vemos el comportamiento. El controlador frontal espera dos argumentos
        llamados <em>controller </em> y <em>method</em>
    </p>
   
    
</div><div>
    