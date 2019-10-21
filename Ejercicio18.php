<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 18</title>
</head>
<body>
    <?php
        setlocale(LC_ALL, 'es_ES');
        $date = date('H\:i\:s \d\e\l \d\í\a d \d\e F \d\e\l \a\ñ\o Y\.');
        $days = date('F \t\i\e\n\e t \d\í\a\s\.');

        echo '<p>Cuando se cargó esta página eran las '.$date.'</p>';
        echo '<p>Este mes de '.$days.'</p>';
    ?>
</body>
</html>