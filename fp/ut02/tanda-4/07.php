<!-- Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares si es necesario. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t04-07</title>
</head>
<body>
    <?php
    $nums = [];
    $pares = [];
    $impares = [];

    for ($i=0; $i < 20; $i++)
    { 
        $nums[$i] = rand(0, 100);
    }

    foreach ($nums as $n)
    {
        echo $n . ' ';
    }

    echo '<br>';

    foreach ($nums as $n)
    {
        if ($n % 2 === 0)
        {
            array_push($pares, $n);
        }
        else
        {
            array_push($impares, $n);
        }
    }

    for ($i=0; $i < 20; $i++)
    { 
        if ($i < count($pares))
        {
            $nums[$i] = $pares[$i];
        }
        else
        {
            $nums[$i] = $impares[$i - count($pares)];
        }
    }

    foreach ($nums as $n)
    {
        echo $n . ' ';
    }
    
    ?>
</body>
</html>