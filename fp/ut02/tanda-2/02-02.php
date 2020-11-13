<!-- Realiza un programa que pida una hora por teclado y que muestre luego
    buenos días, buenas tardes o buenas noches según la hora. Se utilizarán
    los tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. 
    Sólo se tienen en cuenta las horas, los minutos no se deben introducir
    por teclado. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t2-02-02</title>
</head>
<body>
    <?php

        $hora = (int)$_POST['hora'];
        $saludo = '';

        if (6 <= $hora && $hora < 12)
        {
            $saludo = '¡Buenos días!';
        }
        elseif (12 <= $hora && $hora < 20)
        {
            $saludo = '¡Buenas tardes!';
        }
        else
        {
            $saludo = '¡Buenas noches!';    
        }

        echo '<p>' . $saludo . '</p>';

    ?>
</body>
</html>