<div id="main">

    <h2>Formularios y variables superglobales</h2>

    <p>Un elemento fundamental para conseguir la interactividad de un sitio web, 
        para poder enviar información desde el cliente, el navegador, hasta el 
        servidor son los formularios. </p>

    <p>Un poco de HTML. Un formulario se construye con la etiqueta form. 
        El atributo action indica qué  página web debe recibir los datos 
        enviados desde el formulario. El atributo method especifica qué método 
        de conexión se realiza.</p>

    <p>El protocolo HTTP establece varios métodos para solicitar una página. Aunque
        el juego de métodos posibles incluye PUT, DELETE o PATCH, un formulario 
        puede usar el método get (por defecto) y el método post.</p>

    <h3>GET o POST</h3>
    <p>
        El método GET añade los argumentos a la URL de envío. No es adecuado para
        enviar datos sensibles como contraseñas pero tiene la ventaja de que los
        envíos pueden ser enlazados.
        Vamos a ver el mismo ejemplo con ambos métodos.
    </p>

    <h3>Variables superglobales</h3>
    <p>Las variables superglobales son accesibles desde cualquier lugar. Su número 
        no es muy amplio pero vamos a ceñirnos a las que de momento nos interesan</p>
    <ul>
        <li>$_SERVER. Recoge información sobre el servidor, el script que estámos 
            ejecutando,.... No vamos a abundar en ello pero puede ser muy útil.</li>
        <li>$_GET. Recoge la información enviada mediante el método GET.</li>
        <li>$_POST. Recoge la información enviada mediante el método POST.</li>
        <li>$_REQUEST. Recoge la información enviada mediante POST o GET 
            indistintamente. Personalmente prefiero usar las anteriores.</li>
    </ul>

    <h3>Ejemplos</h3>
    <h4>Formulario 1, método GET</h4>
    <?php Format::ejemplo(9); ?>
    <?php Format::ejemplo(9, "b"); ?>

    <h4>Formulario 2. POST y tipos de inputs.</h4>
    <p>Veamos en este ejemplo como usar el resto de inputs habituales. Los input deben
        tener todos nombres distintos, en caso contrario sólo recibiremos el valor 
        del último. Existe la opción de usar los corchetes para recibir los datos en
        un array, observa el ejemplo.</p>
    
    <p>HTML5 define algunos inputs nuevos pero no vamos a usarlos en estos ejemplos.</p>
    <p>
        Vamos a usar el método POST, como vemos la URL no recoge los datos enviados.</p>
    <?php Format::ejemplo(10); ?>
    <?php Format::ejemplo(10, "b"); ?>

    <h4>Formulario 3. Enviando cosas a sí mismo</h4>
    <p>Para terminar con los formularios veamos que podemos enviar y recibir
    el formulario desde es mismo script</p>
    <?php Format::ejemplo(11); ?>


    <?php //var_dump($_SERVER) ?>

</div>