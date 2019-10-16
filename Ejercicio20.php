<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 20</title>
</head>
<body>
    <?php
        $animals = ['Ballena' => 'ballena', 'Caballito de mar' => 'caballito-mar', 'Camello' => 'camello', 'Cebra' => 'cebra', 'Elefante' => 'elefante', 'Hipopotamo' => 'hipopotamo', 'Jirafa' => 'jirafa', 'Leon' => 'leon', 'Leopardo' => 'leopardo', 'Medusa' => 'medusa', 'Mono' => 'mono', 'Oso blanco' => 'oso-blanco', 'Oso' => 'oso', 'Pajaro' => 'pajaro', 'Pingüino' => 'pinguino', 'Rinoceronte' => 'rinoceronte', 'Serpiente' => 'serpiente', 'Tigre' => 'tigre', 'Tortuga marina' => 'tortuga-marina', 'Tortuga' => 'tortuga'];
        define('ROUTE', 'img/');
        define('EXTENSION', '.svg');
        $images = dir('img');
        while(($file = $images->read()) !== false){
            var_dump($file);
        }
        $images->close();

        foreach($animals as $key => $value){
            echo '<h4>'.$key.'</h4>';
            echo '<img src = '.ROUTE.$value.EXTENSION.'></img></br>';
        }
    ?>
</body>
</html>