<?php

    // Operadores aritméticos
    $numero1 = 65;
    $numero2 = 33;

    echo 'Suma: ' .           ($numero1 + $numero2) . '<br>';
    echo 'Resta: ' .          ($numero1 - $numero2) . '<br>';
    echo 'Multiplicacion: ' . ($numero1 * $numero2) . '<br>';
    echo 'Division: ' .       ($numero1 / $numero2) . '<br>';
    
    // Resto de una división
    echo 'Residuo: ' .       ($numero1 % $numero2) . '<br>';
    
    // Operadores de incremento y decremento
    $anio = 2019;
    
    // Incremento
    // $anio + 1
    $anio++;
    
    // Decremento
    // $anio - 1
    $anio--;

    // Pre - Incremento
    // $anio = $anio + 1
    ++$anio;

    // Pre - Decremento
    // $anio = $anio - 1
    --$anio;

    echo "<h1>$anio</h1>";

    // Operadores de asignacion
    $edad = 55;
    echo $edad.'<br>';

    // Descripción de lo que sucede abajo
    // $edad = $edad + 5
    echo $edad += 5;

    var_dump($edad);
    
?>