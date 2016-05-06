<?php

abstract class Paths{
    static function path($file="")
    {
        return Config::HOST . $file;
    }

}