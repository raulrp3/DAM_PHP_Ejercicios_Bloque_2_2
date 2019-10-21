<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 16</title>
</head>
<body>
    <?php
        $url = 'https://www.youtube.com/watch?v=vfbd42oghii';

        preg_match('#=[a-zA-Z0-9]+#', $url, $matches);
        if (!empty($matches)){
            $result = preg_replace('#=#', '', $matches[0]);

            echo $result;
        }
    ?>
</body>
</html>