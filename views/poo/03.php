<div id="main">
    <?php include "views/poo/00.php";?>
    <h2>Métodos mágicos</h2>
    
    <p>
        En PHP reciben este nombre los métodos que se ejecutan de forma
    automática al producirse determinado evento. Cada clase puede o no 
    implementarlos pero si están implementados se ejecutarán cuando se den
    las circunstancias correspondietes.
    </p>
    
    <p>
        Veamos los más relevantes.
    </p>
    
    <ul>
        <li><strong>__construct().</strong> Al crear un objeto se ejecuta este método asociado
        a la clase correspondiete.</li>
        <li><strong>__destruct().</strong> De forma análoga se ejecuta al
        eliminar un objeto.</li>
        <li><strong>__toString()</strong> Se ejecuta siempre que un objeto es 
        tratado como un texto.</li>
        <li><strong>__call().</strong> Se ejecuta después de invocar a un método
            pero antes de que se ejecute ninguna óden del citado método.
    </ul>
    
    <p>
        Existen un número más amplio pero no los vamos a estudiar aunque sí 
        los podemos citar:  __callStatic(), __get(), __set(), __isset(),
        __unset(), __sleep(), __wakeup(), __toString(), __invoke(), 
    </p>

    <?php Format::ejemplo(14);?>

</div><div>
    