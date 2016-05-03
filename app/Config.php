<?php

abstract class Config{
    const HOST = 'http://localhost/introduccionphp/';
    const ROOT = 'C:/wamp/www/introduccionphp/';

    static function path($file="")
    {
        return Config::HOST . $file;
    }
}