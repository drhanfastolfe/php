<!-- Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas. Se pagarán 12 euros por hora. Recogida de datos por teclado mediante formularios -->
<!-- Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas. Se pagarán 12 euros por hora. Recogida de datos por teclado mediante formularios -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-08-02</title>
</head>
<body>
    <?php

        $horas = (float)$_POST['horas'];
        $salario = round(($horas * 12), 2);

        echo '<p>El salario semanal es : ' . $salario . '€</p>';

    ?>
</body>
</html>
