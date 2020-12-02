<!-- Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz resultado, ambas con los números convenientemente alineados. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t04-15</title>
    <style>
        .principal
        {
            display: flex;
            flex-direction: row;
            column-gap: 20px;
        }

        .matrizNormal
        {
            display: grid;
            grid-template-columns: repeat(12, 25px);
            grid-template-rows: repeat(12, 25px);
            justify-items: center;
            border: 2px solid red;
            width: 300px;
        }

        .matrizRotada
        {
            display: grid;
            grid-template-columns: repeat(12, 25px);
            grid-template-rows: repeat(12, 25px);
            justify-items: center;
            border: 2px solid green;
            width: 300px;
        }
    </style>
</head>
<body>
    <?php

        $matriz = [];
        $matrizRotada = [];

        echo '<div class="principal">';
        echo    '<div class="matrizNormal">';
        for ($i=0; $i < 12; $i++)
        { 
            for ($j=0; $j < 12; $j++)
            { 
                $matriz[$i][$j] = rand(0, 100);
                echo '<div>' . $matriz[$i][$j] . '</div>';
            }
        }
        echo    '</div>';

        echo    '<div class="matrizRotada">';
        for ($i=0; $i < 12; $i++)
        { 
            for ($j=0; $j < 12; $j++)
            { 
                if (($j - $i) > 0 && ($i + $j) <= 11)
                {
                    $matrizRotada[$i][$j] = $matriz[$i][$j - 1];
                }
                elseif (($j - $i) >= 0 && ($i + $j) > 11)
                {
                    $matrizRotada[$i][$j] = $matriz[$i - 1][$j];
                }
                elseif (($j - $i) < 0 && ($i + $j) >= 11)
                {
                    $matrizRotada[$i][$j] = $matriz[$i][$j + 1];
                }
                else
                {
                    $matrizRotada[$i][$j] = $matriz[$i + 1][$j];
                }
                echo '<div>' . $matrizRotada[$i][$j] . '</div>';
            }
        }
        echo    '</div>';
        echo '</div>';

    ?>
</body>
</html>