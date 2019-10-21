<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 17</title>
</head>
<body>
    <?php
        $html = file_get_contents('https://escuelaestech.es/noticias-estech/');

        preg_match_all('#<h3 class="the-title">.+<\/h3>#', $html, $matches);
        if (!empty($matches)){
            $result = preg_replace(['#<h3 class="the-title"><a href=".+">#', '#</a></h3>#'], ['', ''], $matches[0]);
            
            foreach($result as $item){
                echo '<p>'.$item.'</p>';
            }
        }
    ?>
</body>
</html>