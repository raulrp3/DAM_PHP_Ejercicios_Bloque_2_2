<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 14</title>
</head>
<body>
    <?php
        $string = 'Hola como te va este bonito miercoles';

        echo '<p>Cadena original: '.$string.'</p>';

        $result = preg_replace('# #', '', $string);
        echo '<p>Resultado: '.$result.'</p>';
    ?>
</body>
</html>