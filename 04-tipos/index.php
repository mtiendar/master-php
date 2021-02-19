<!-- Tipos de datos -->

<?php
    $numero    = 100;
    $decimal   = 9.9;
    $texto     = 'Soy una cadena \"';
    $verdadero = true;
    $vacio     = null;

    // gettype nos da el tipo de dato
    echo gettype($numero)    . "<br>";
    echo gettype($decimal)   . "<br>";
    echo gettype($texto)     . "<br>";
    echo gettype($verdadero) . "<br>";
    echo gettype($vacio)     . "<br>";

    echo 'Soy un texto' . ' ' . $texto . "<br>";

    // Debuggear
    $miNombre [] = 'Marco Antonio Tienda';
    // $miNombre [] = 'Marco Antonio Tienda';
    var_dump($miNombre);
?>
