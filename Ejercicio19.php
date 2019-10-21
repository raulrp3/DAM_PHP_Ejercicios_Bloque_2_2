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
        list($year, $month, $day) = explode('-', '1997-05-18');

        $diff = $now->diff($birthday);
        $yearDiff = date('Y') - $year;
        $monthDiff = date('m') - $month;
        $dayDiff = date('d') - $day;

        if((($dayDiff < 0) && ($monthDiff == 0)) || ($monthDiff < 0)){
            $yearDiff--;
        }

        echo '<p>Quedan '.$diff->format('%a').' días para tu cumpleaños.</p>';
        echo '<p>Tengo '.$yearDiff.' años, '.$monthDiff.' meses, '.$dayDiff.' días.</p>';
    ?>
</body>
</html>