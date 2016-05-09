<?php

/**
 * Description of Bootstrap
 * Clase raíz que carga el controlador solicitado y ejecuta el método que se
 * haya pedido, con o sin argumentos.
 *
 * @rafacabeza
 */
class Bootstrap
{
    public function __construct()
    {
        $controller = $_GET['controller'];
        $method = $_GET['method'];
        
        echo '<!DOCTYPE html>';   
        echo '<meta charset="UTF-8">';
        echo 'Estamos en Bootstrap, el controlador frontal. <br>';
        echo ' Esta será la raíz de la apliación de ahora en adelante. <br>' ;
        echo 'Esto es el __construct, algo asi como el main. <br>';
        
        echo '<hr>';
        if(empty($controller)){
            echo 'Observa la URL. Despues pulsa el siguiente enlace y vuelve a '
            . 'mirar<br>';
            echo '<a href="?controller=user&method=add"> Alta de usuario </a>';
        }
        else{
            echo "Vamos a ejecutar $controller-->$method";            
        }           
    }
}
