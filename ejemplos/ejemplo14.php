<?php
//Probando los métodos mágicos
class Estudio
{
    private $_codigo; 
    private $_siglas;
    private $_nombre;

    function __construct($codigo, $siglas, $nombre)   //así los públicos
    {
    	echo "Construyento nuevo estudio <hr> ";
    	$this->_codigo = $codigo;
    	$this->_siglas = $siglas;
    	$this->_nombre = $nombre;
    }

    function __toString()
    {
    	return $this->_nombre;
    }

    function __destruct()
    {
    	echo "<hr> adios";
    }
}

$prueba = new Estudio('IFC303', 'DAW', 'Desarrollo de Aplicaciones Web');

echo $prueba;

unset($prueba);

echo "<hr> fin";