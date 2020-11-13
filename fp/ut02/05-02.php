<!-- Escribe un programa que calcule el área de un rectángulo. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-05-02</title>
</head>
<body>
    <?php

        $base = (float)$_POST['base'];
        $altura = (float)$_POST['altura'];
        $area = $base * $altura;

        echo '<p>El área del rectángulo es ' . $area . '</p>';
    ?>
</body>
</html>