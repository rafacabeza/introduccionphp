<div id="main">

    <h2>Sesiones y cookies</h2>
    <p>Cookies y sesiones responden a la necesidad de conservar información al pasar de una página a otra o entre dos llamadas a la misma página.</p>

    <h3>Cookies</h3>

    <ul>
        <li>
            Una cookie es un fichero que se guarda en el fichero del cliente. Este fichero está ligado al sitio web que lo crea y al navegador usado.
        </li>
        <li>
           En él se almacena el contenido de un array de variables.     
       </li>
       <li>
        Se crea mediante la función setcookie(). Esta función admite además otros parámetros pero nos centraremos sólo en $expire, o tiempo de vida en segundos. Por defecto, 0, se elimina al cerrar el navegador.
        
    </li>
    <li>
        Se accede a su contenido mendiante la variable superglobal $_COOKIE
    </li>
    <li>
        Para eliminar una cookie usa setcookie con tiempo menor al actual: setcookie(x,y,time()-1)    
        
    </li>
    <li>
        Puede ser interesante usar arrays:    
        <ul>
            <li>
                <?php
                $mitexto = 'setcookie("miCookie[posicion1]", $valorDado, 3600);';
                highlight_string($mitexto);
                ?>            
            </li>
            <li>
                <?php
                $mitexto = '$valorGuardado = $_COOKIE["miCookie"]["posicion1"];';
                highlight_string($mitexto);
                ?>            
            </li>
        </ul>
        </li>
        </ul>

        <h3>Sesiones</h3>

        <ul> 
         <li>También llamadas cookies del lado del servidor.</li>

         <li>Debe ser inicializada con la función session_start().</li>
         <li>Al iniciar la sesión se crea un id aleatorio para la sesión. Este id se puede transmitir en la url o guardar en una cookie de forma transparente al programador. La opción de la url es poco recomendaable por segurirdad.</li>
         <li>La información se guarda en la variable superglobal $_SESSION. Es un array al que podemos añadir elementos según necesitamos y que podemos leer como es habitual.</li>
         </ul>
         <p>Se elimina con la suma de dos funciones:</p>
         unset($_SESSION); #elimina la  variable $_SESION (o un elemento si se indica así:  unset($_SESSION['elemento']);
         session_destroy($_SESSION); #elimina la información del cliente.
         <li>Sobre las opciones de sesión. Sus parámetros se establecen en el php.ini:</li> enlace.
         <ul>
             <li>Cookie o url.</li>
             <li>Autostart, para requerir el uso de session_start() o no.</li>
             <li>Tiempo de vida</li>
             <li>Nombre (por defecto PHPSESSID)</li>
             <li>otros...</li>
         </ul>
        </div>         
