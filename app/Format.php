<?php


abstract class Format
{
    static function ejemplo($ejemplo="", $version="")
    {
        
//        if (empty($ejemplo)) return 0;
        $path = 'ejemplos/ejemplo' . sprintf("%02d", $ejemplo) . $version . '.php';
        echo '<div class="php">';
        highlight_file($path );
        echo '</div>';
        echo '<p class="figura"><a href="../' . 
                $path . '">Ejemplo ' . $ejemplo . $version . '</a></p>';
        
    }

    static function codigoLiteral($codigo )
    {
        
//        if (empty($ejemplo)) return 0;
        echo '<div class="php">';
        highlight_string($codigo);
        echo '</div>';        
    }

    static function codigoFichero($fichero="" )
    {
//        if (empty($ejemplo)) return 0;
        $path = 'ejemplos/' .  $fichero;
        echo '<div class="php">';
        highlight_file($path );
        echo '</div>';        
    }
}
