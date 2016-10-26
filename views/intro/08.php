<div id="main">

<h2>Subir ficheros </h2>
<ul>
    <li>Debemos crear un formulario. Muy importante el atributo ectype="multipart/form-data". Además el método debe ser post y action debe indicar el script que recibe el fichero. 
    </li>
    <?php Format::ejemploHtml(15); ?>

    <li>La variable superglobal $_FILES contiene toda la información relativa al fichero o ficheros subidos. En ella encontramos atributos como size, type, name y tmp_name</li>

    <li>Este es el script que termina el trabajo. </li>
    <?php Format::codigoFichero('ejemplos/ejemplo15.php'); ?>

<h2>
    Ficheros
</h2>
<p>Aprovechamos para ver como recorrer un directorio y mostrar su contenido.</p>

    <?php Format::ejemplo(16); ?>


</div>