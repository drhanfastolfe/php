<!-- Escribe un programa en que dado un número del 1 a 7 escriba
     el correspondiente nombre del día de la semana. -->
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t2-02-02</title>
</head>
<body>
    <?php

        $dias = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
        $dia = $_POST['dia'];

        echo '<p>' . $dias[$dia - 1] . '</p>';

    ?>
</body>
</html>