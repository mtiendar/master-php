<?php

    // Bucle while
    $numero = 0;

    while ($numero <= 100) {
        echo $numero;
        if ($numero != 100) {
            echo ", ";
        }
        $numero++;
    }
    
    echo "<hr>";
    // Ejemplo

    if (isset($_GET['numero'])) {
        // Tranformar string -> int (int)
        $numero = (int)$_GET['numero'];
    } else {
        $numero = 1;
    }

    echo "<h1>Tabla de multiplicar del numero $numero</h1>";

    $contador = 0;

    while ($contador <= 10)  {
        echo "$numero x $contador = " . ($numero * $contador) . "<br>";
        $contador++;
    }

    echo "<hr>";
    // Do while

    $edad = 18;

    do {

    } while($edad >= 18);



?>