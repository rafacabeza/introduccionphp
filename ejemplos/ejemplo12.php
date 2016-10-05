<?php
/**
* Prueba de comentario
* La recomendación es un fichero para cada clase.
* Aquí no hemos seguido esa norma.
*/
class Alumno
{
    //atributos. La recomendación de POO es que sean privados
    private $_nombre;
    //métodos
    public function __construct($nombre)
    {
        $this->_nombre = $nombre;
    }

    public function saluda()
    {
        echo "Hola me llamo $this->_nombre <br>";
    }

    public function adios()
    {
        echo 'Adios. <br>';
    }
}

$miAlumno = new Alumno('Alberto'); //creación
$miAlumno->saluda(); //llamada a métodos
$miAlumno->adios();
