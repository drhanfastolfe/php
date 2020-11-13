<!-- Escribe un programa que calcule el total de una factura a partir de la base imponible. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-07-02</title>
</head>
<body>
    <?php

        $subtotal = (float)$_POST['subtotal'];
        $total = round(($subtotal * 1.21), 2);

        echo '<p>El total a pagar es: ' . $total . '€</p>';

    ?>
</body>
</html>