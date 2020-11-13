<!-- Escribe un programa que calcule el área de un triángulo. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-06-02</title>
</head>
<body>
    <?php

        $base = (float)$_POST['base'];
        $altura = (float)$_POST['altura'];
        $area = $base * $altura;

        echo '<p>El área del triángulo es: ' . $area . '</p>';

    ?>
</body>
</html>