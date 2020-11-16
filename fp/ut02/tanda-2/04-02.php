<!-- Vamos a ampliar uno de los ejercicios de la relación anterior para 
    considerar las horas extras. Escribe un programa que calcule el 
    salario semanal de un trabajador teniendo en cuenta que las horas 
    ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la 
    hora. A partir de la hora 41, se pagan a 16 euros la hora. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t02-04-02</title>
</head>
<body>
    <?php

        $horas = (int)$_POST['horas'];
        $horasNormales = 0;
        $horasExtra = 0;
        $sueldo;

        if ($horas > 40)
        {
            $horasNormales = 40;
            $horasExtra = $horas - 40;
        }
        else
        {
            $horasNormales = $horas;
        }

        $sueldo = ($horasNormales * 12) + ($horasExtra * 16);

        echo '<p>El salario semanal sería: ' . $sueldo . '€</p>'

    ?>
</body>
</html>