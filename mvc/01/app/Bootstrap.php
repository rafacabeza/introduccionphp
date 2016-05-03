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

    //put your code here


    public function __construct()
    {
        $controller = $_GET['controller'];
        $method = $_GET['method'];
        
        echo 'Estamos sen Bootstrap, el controlador frontal, raíz de la' 
                . 'apliación de ahora en adelante. <br>' ;
        echo 'Esto es el __construct, algo asi como el main. <br>';
        
        echo "Vamos a ejecutar $controller-->$method";
    }

}
