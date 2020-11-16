<!-- Realiza un programa que calcule el tiempo que tardará en 
    caer un objeto desde una altura h. Aplica t=raiz(2h/g) 
    siendo g = 9.81m/s2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t02-06-02</title>
</head>
<body>
    <?php

        $altura = (float)$_POST['altura'];
        $tiempo = round(sqrt((2 * $altura) / (9.81)), 3);

        echo '<p>Tardará ' . $tiempo . ' segundos en caer</p>';

    ?>
</body>
</html>