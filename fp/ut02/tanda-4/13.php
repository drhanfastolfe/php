<!-- Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendidos entre 100 y 999 (ambos inclusive). Todos los números deben ser distintos, es decir, no se puede repetir ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que se cumplan los siguientes requisitos:

• Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.

• El mínimo debe aparecer en color azul.

• El resto de números deben aparecer en color negro. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t04-13</title>
    <style>
        div
        {
            display: inline-block;
            padding: 5px;
        }

        .min
        {
            color: blue;
        }

        .diagonal
        {
            color: green;
        }
    </style>
</head>
<body>
    <?php

        $numeros2D = [];
        $random54 = [];
        $min = 999;
        $iMin;
        $jMin;

        while (count($random54) < 54)
        {
            $nRandom = rand(100, 999);

            if (!in_array($nRandom, $random54))
            {
                array_push($random54, $nRandom);
            }
        }

        $k = 0;
        for ($i=0; $i < 6; $i++)
        { 
            for ($j=0; $j < 9; $j++)
            { 
                $numeros2D[$i][$j] = $random54[$k];
                $k++;
                
                if ($min > $numeros2D[$i][$j])
                {
                    $min = $numeros2D[$i][$j];
                    $iMin = $i;
                    $jMin = $j;
                }
            }
        }
        
        for ($i=0; $i < 6; $i++)
        { 
            for ($j=0; $j < 9; $j++)
            {
                if ($i==$iMin && $j==$jMin)
                {
                    echo '<div class="min">' . $numeros2D[$i][$j] . '</div>';    
                }
                elseif (($i - $j) == ($iMin - $jMin) || ($i + $j) == ($iMin + $jMin))
                {
                    echo '<div class="diagonal">' . $numeros2D[$i][$j] . '</div>';
                }
                else
                {
                    echo '<div>' . $numeros2D[$i][$j] . '</div>';
                }
            }
            echo '<br>';
        }

    ?>
</body>
</html>
