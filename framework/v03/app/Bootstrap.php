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
        $controllerName = $_GET['controller'];
        $method = $_GET['method'];
        $id = $_GET['id'];
        
        if(empty($controllerName)){
            echo '<a href="?controller=user&method=index"> Lista de usuarios </a><br>';
            echo '<a href="?controller=user&method=show&id=1"> Usuario nº. 1 </a><br>';
            echo '<a href="?controller=user&method=add"> Alta de usuario </a><br>';
        }
        else{
            require_once 'controllers/' . $controllerName . '.php';
            $controller = new $controllerName;
            $controller->$method($id);
        }           
    }
}
