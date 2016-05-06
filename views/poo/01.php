<div id="main">
    <?php include "views/poo/00.php";?>
<!--    <h1>Programación Orientada a Objetos con PHP</h1>-->
    <p>
    PHP nación como un lenguaje de scripting. Como tal no tenía la posibilidad 
    de usar programación orientada a objetos. PHP 4 incluía la orientación a 
    objetos aunque fue a partir de la versión 5 cuando podemos decir que PHP 
    cuenta con una funcionalidad completa como lenguaje orientado a objetos.
    </p>
    <p>
    El paradigma de POO nació antes de 1990 pero fue en esta década cuando
    se extendió su uso. No vamos a justificar en este texto 
    las ventajas de este paradigma sobre la programación estructurada. Entendemos 
    que ese debate se ha realizado durate el primer curso de este ciclo.</p>
    <p>. En el tema     anterior hemos esbozado el uso de algunos elementos del 
        lenguaje sin usaar objetos. El lenguaje nos permite ambos paradigmas, no
        obstante, en adelante todo lo que veamos y hagamos será siguiendo el 
        paradigma de POO.
    </p>
    <p>
        Vamos a revisar algunos conceptos sobre POO.
    </p>
    <ul>
        <li>
        Clase. Definiciones de las propiedades y comportamiento de un tipo de 
        objeto concreto.            
        </li>
        <li>
        Objeto. Ejemplar de una clase determinada. (Instancia es un false friend
        del inglés instance pero muy utilizado).
        </li>
        <li>
        Método. Acciones asociadas a un clase. En php se definen como funciones
        (function). Cad a objeto puede realizar estas acciones.
        </li>
        <li>
        Atributo. Características de la clase, informaciones que definen a cada
        objeto.
        </li>
        <li>
        Herencia. Las clases no se encuentran aisladas, sino que se relacionan 
        entre sí, formando una jerarquía. Si una clase es la ampliación o 
        extensión de otra, queda debajo en la jerarquía y hereda algunos de sus
        métodos y atributos.
        </li>
        <li>
        Visibilidad: 
            <ul>
                <li>
                Pública (public). Los elementos son visibles desde fuera por todo el mundo.
                </li>
                <li>
                Privada (private). Los elementos son visibles únicamente desde dentro de la clase. Los atributos deben ser todos private.
                </li>
                <li>
                Protegida (protected). Los elementos son visibles dentro de la clase y de sus clases “hija”, es decir que extienden la propia clase.    
                </li>

            </ul>
            </li>
            <li>
                Sobrecarga. No está soportada por PHP. 
                Consiste en definir más de un método con el mismo
                nombre pero distintos parámetros.
            </li>
    </ul>
    
    <p>
        Veamos esto y más desde la práctica en los próximos apartados.
    </p>
    
</div>
