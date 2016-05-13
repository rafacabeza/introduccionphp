<?php
//desde esta clase se va a mostrar las distintas vistas.
class View
{
    public function render($view)
    {
        require 'views/' . $view;
    }
}
