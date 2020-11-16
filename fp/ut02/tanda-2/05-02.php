<!-- Realiza un programa que resuelva una ecuación 
de primer grado (del tipo ax + b = 0). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t02-05-02</title>
</head>
<body>
    <?php

        $a = (float)$_POST['a'];
        $b = (float)$_POST['b'];

        $x = (-$b) / $a;

        echo '<p>x = ' . $x;

    ?>
</body>
</html>