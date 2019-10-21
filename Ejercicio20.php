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
        $images = dir('img');
        $animals = ['ballena.svg' => 'Ballena', 'caballito-mar.svg' => 'Caballito de mar', 'camello.svg' => 'Camello', 'cebra.svg' => 'Cebra', 'elefante.svg' => 'Elefante', 'hipopotamo.svg' => 'Hipopotamo', 'jirafa.svg' => 'Jirafa', 'leon.svg' => 'León', 'leopardo.svg' => 'Leopardo', 'medusa.svg' => 'Medusa', 'mono.svg' => 'Mono', 'oso-blanco.svg' => 'Oso polar', 'oso.svg' => 'Oso', 'pajaro.svg' => 'Pájaro', 'pinguino.svg' => 'Pingüino', 'rinoceronte.svg' => 'Rinoceronte', 'serpiente.svg' => 'Serpiente', 'tigre.svg' => 'Tigre', 'tortuga-marina.svg' => 'Tortuga marina', 'tortuga.svg' => 'Tortuga'];
        $file = fopen('animales.txt', 'w');

        while(($img = $images->read()) != false){
            if ($img != '.' && $img != '..'){
                fwrite($file, $img.'('.filesize('img/'.$img).')'.PHP_EOL);
                echo '<h4>'.$animals[$img].'</h4>';
                echo '<img src=img/'.$img.'></img>';
            }
        }
        
        $images->close();
        fclose($file);
    ?>
</body>
</html>