<!-- Escribe un programa que pida por teclado un día de la semana 
y que diga qué asignatura toca a primera hora ese día. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t2-01-02</title>
</head>
<body>
    <?php

        $asignatras = array('DWEC', 'EIE', 'DWES', 'DAW', 'DIW', 'nada', 'nada');
        $dia = (int)$_POST['dia'];
        $asignaturaDia = $asignatras[$dia - 1];

        echo '<p>El día ' . $dia . ' toca: ' . $asignaturaDia;

    ?>
</body>
</html>