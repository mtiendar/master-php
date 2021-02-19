<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla</title>
</head>
<body>

    <h1>Master en PHP</h1>
    <?='Bienvenido al curso más grande de php' ?>

    <?php
        echo '<h3>Listado de videojuegos: </h3>';
        echo '<ul>'
        .'<li>GTA</li>'
        .'<li>Fifa</li>'
        .'<li>Mario Bros</li>'
        .'</ul>';
    
        // echo '<br>Hola<br>';

        // !Esto es un parrafo explicativo
        echo '<p>Esta es toda' . ' - ' . 'Lista de juegos</p>'
    ?>

</body>
</html>

