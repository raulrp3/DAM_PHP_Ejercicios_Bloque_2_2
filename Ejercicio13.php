<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php
        $string = 'Hola como estas';

        echo '<p>Cadena original: '.$string.'</p>';
        
        preg_match_all('#[a-zA-z]+#', $string, $matches);
        if (!empty($matches)){
            unset($matches[0][count($matches[0]) - 1]);
            $result = implode(' ', $matches[0]);

            echo '<p>Resultado: '.$result.'</p>';
        }
    ?>
</body>
</html>