<!-- Realiza un programa que resuelva una ecuación de segundo 
    grado (del tipo ax2 + bx + c = 0). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t02-09-02</title>
</head>
<body>
    <?php

        $a = (float)$_POST['a'];
        $b = (float)$_POST['b'];
        $c = (float)$_POST['c'];

        $raiz = (($b*$b) - (4 * $a * $c));

        if ($raiz < 0)
        {
            echo '<p>No tiene solución</p>';
        }
        else
        {
            $x1 =  ((-$b) + sqrt($raiz)) / (2 * $a);
            $x2 =  ((-$b) - sqrt($raiz)) / (2 * $a);

            echo '<p>x1 = ' . $x1 . '<br> x2 = ' . $x2 . '</p>';
        }
        
    ?>
</body>
</html>