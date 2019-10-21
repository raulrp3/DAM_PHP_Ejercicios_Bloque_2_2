<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 22</title>
</head>
<body>
    
</body>
    <?php 
        $html = file_get_contents('http://localhost:8888/Ejercicios_Bloque_2_2/Ejercicio20.php');

        preg_match_all('#<img src=.+><\/img>#', $html, $matches);
        foreach($matches[0] as $item){
            echo $item.'</br>';
        }
    ?>
</html>