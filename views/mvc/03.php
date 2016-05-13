<div id="main">
    <?php include "views/mvc/00.php";?>
    <h2>Model Vista Controlador</h2>
    
    <p>
        Vamos a ver un primer ejemplo en el que vamos a esbozar un juego de 
        clases MVC. Vamos a implementar una controlador <em>User</em> que es 
        capaz de gestionar el listado de usuarios, mostrar por pantalla los 
        datos de un usuario dado o dar el alta de uno nuevo.
    </p>
    
    <p>
        Para lograrlo usaremos una clase UserModel que se ocupa de obtener y 
        almacenar los datos de usuarios. Por simplicidad se trata de un array
        estatico donde no se contemplan altas ni bajas. En una situacion tipica
        el modelo se conectaria con un sistema de base de datos
    </p>
    
    <p>
        En este  <a href="<?php echo Config::HOST;?>framework/v02/">enlace</a>
        vemos el comportamiento. El controlador frontal espera dos argumentos
        llamados <em>controller </em> y <em>method</em>
    </p>
   </div><div>
    