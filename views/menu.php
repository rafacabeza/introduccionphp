<div id="menu">
    <h3>Capitulos</h3>
    <a href="<?php echo Paths::path('intro/01'); ?>">
        Introducción </a> <br>
<!--    <a href="<?php echo Paths::path('forms/01'); ?>">
        Formularios </a> <br>-->
    <a href="<?php echo Paths::path('poo/01'); ?>">
        POO  </a> <br>
    <a href="<?php echo Paths::path('mvc/01'); ?>">
        MVC </a> <br>
    <a href="<?php echo Paths::path('acl/01'); ?>">
        Control de acceso </a>  <br>
        

        
        
    <?php
    echo '<h4>Apartados:  <br>';
    switch ($chapter) {
        case 'intro':
            echo 'Introducción</h4>';
            echo '<a href="'.Paths::path('intro/01').'">Introducción </a> <br>';
            echo '<a href="'.Paths::path('intro/02').'">Variables y tipos </a> <br>';
            echo '<a href="'.Paths::path('intro/03').'">Control de flujo </a> <br>';
            echo '<a href="'.Paths::path('intro/04').'">Arrays </a> <br>';
            echo '<a href="'.Paths::path('intro/05').'">Funciones </a> <br>';
            echo '<a href="'.Paths::path('intro/06').'">Formularios </a> <br>';
            echo '<a href="'.Paths::path('intro/07').'">Cookies y sesiones </a> <br>';
            echo '<a href="'.Paths::path('intro/08').'">Subir ficheros </a> <br>';
            break;

        case 'forms':
            echo 'Formularios</h4>';
            echo '<a href="'.Paths::path('forms/01').'">Introducción </a> <br>';
            break;

        case 'poo':
            echo 'POO & MVC</h4>';
            echo '<a href="'.Paths::path('poo/01').'">Introducción </a> <br>';
            echo '<a href="'.Paths::path('poo/02').'">Primera clase </a> <br>';
            echo '<a href="'.Paths::path('poo/03').'">Métodos mágicos </a> <br>';
            echo '<a href="'.Paths::path('poo/04').'">Clases abstractas </a> <br>';
            echo '<a href="'.Paths::path('poo/05').'">Constantes y static </a> <br>';
            echo '<a href="'.Paths::path('poo/06').'">Herencia </a> <br>';
            echo '<a href="'.Paths::path('poo/07').'">Interfaces </a> <br>';
            break;

        case 'mvc':
            echo 'POO & MVC</h4>';
            echo '<a href="'.Paths::path('mvc/01').'"> El MVC </a> <br>';
            echo '<a href="'.Paths::path('mvc/02').'">Controlador frontal </a> <br>';
            echo '<a href="'.Paths::path('mvc/03').'">Mi primer MVC </a> <br>';
            echo '<a href="'.Paths::path('mvc/04').'">URL amigables </a> <br>';
            echo '<a href="'.Paths::path('mvc/04').'"> ... </a> <br>';
            echo '<a href="'.Paths::path('mvc/05').'"> ...  </a> <br>';
            echo '<a href="'.Paths::path('mvc/06').'"> ...  </a> <br>';
            break;

        default:
            break;
        }
    ?>
</div>            
        