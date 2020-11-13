<!-- Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 13 πr 2 h. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-09-02</title>
</head>
<body>
    <?php

        $radio = (float)$_POST['radio'];
        $altura = (float)$_POST['altura'];
        $volumen = round( ( (1/3) * pi() * ($radio**2) * $altura), 2);

        echo '<p>El volumen del cono es : ' . $volumen . ' unidades</p>';

    ?>
</body>
</html>