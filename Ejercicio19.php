<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 19</title>
</head>
<body>
    <?php
        $year = date('Y') + 1;
        $birthday = new DateTime($year.'-05-18');
        $now = new DateTime('now');

        $diff = $now->diff($birthday);

        echo '<p>Quedan '.$diff->format('%a').' días para tu cumpleaños.</p>';
        echo '<p>Tu cumpleaños es '.$birthday->format('d-m-Y').'.</p>';
    ?>
</body>
</html>