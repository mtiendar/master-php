<?php 

    // Condicionales

    $color = 'verde';

    if ($color == 'rojo') {
        echo 'El color es rojo';
    } else {
        echo 'El color no es rojo';
    }

    echo '<br>';

    $year = 2019;
    if ($year < 2019) {
        echo 'Estamos en 2019';
    } else {
        echo 'No estamos en 2019';
    }

    // Ejemplo 3

    $nombre = 'Marco Tienda';
    $ciudad = 'Estado de Mexico';
    $continente = 'America';
    $edad = 18;
    $mayoria_de_edad = 18;

    if ($edad >= $mayoria_de_edad) {
        echo "<h1>$nombre es mayor de edad</h1>";
        
        if ($continente == 'America') {
            echo "<h2>Y es de $ciudad</h2>";
        } else {
            echo 'No es de $continente';
        }
        
    } else {
        echo "<h2>$nombre No es mayor de edad</h2>";
    }

    echo "<br>";

    // Ejemplo no. 4
    $dia = 3;

    if ($dia == 1) {
        echo "Es Lunes";
    } else if ($dia == 2) {
        echo "Es Martes";
    }
    else if ($dia == 3) {
        echo "Es Miercoles";
    }
    else if ($dia == 4) {
        echo "Es Jueves";
    }
    else if ($dia == 5) {
        echo "Es Viernes";
    } else {
        echo 'Es fin de semana';
    }

    echo "<hr>";

    /*
    Operadores Lógicos

    * And      = &&
    * OR       = ||
    * Negación = !

    * and, or <- Se pueden usar en texto
    
    */
    // Ejemplo 5

    $edad1 = 18;
    $edad2 = 64;
    $edadOficial = 17;

    if ($edadOficial >= $edad1 && $edadOficial <= $edad2) {
        echo 'Esta en edad de trabajar';
    } else {
        echo 'No puede trabajar';
    }

    echo "<hr>";

    $pais = 'Mexico';

    if ($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia') {
        echo "En este pais se habla espaniol";
    } else {
        echo "En este pais no se habla español";
    }

    echo "<br>";
    echo "<hr>";
    // Switch

    $dia = 4;

    switch ($dia) {
        case 1:
            echo 'Lunes';
            break;
        case 2:
            echo 'Martes';
            break;
    
        case 3:
            echo 'Miercoles';
            break;

        case 4:
            echo 'Jueves';
            break;

        case 5:
            echo 'Viernes';
            break;

        default:
            echo 'Es fin de semana';
            break;
    }

    // Goto
    // Omite codigo hasta encontrar la marca seleccionada
    goto marca; 

    echo "<h3>Instrucción 1</h3>";
    echo "<h3>Instrucción 2</h3>";
    echo "<h3>Instrucción 3</h3>";
    echo "<h3>Instrucción 4</h3>";

    marca:
    echo "<h1>Me he saltado 4 echos</h1>";


?>