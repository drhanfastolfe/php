<!-- Escribe un programa que lea un número N e imprima una pirámide de números con N filas como en la siguiente figura. Recuerda utilizar un tipo de letra de ancho fijo como por ejemplo Courier para que los espacios tengan la misma anchura que los números. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t03-24</title>
</head>
<body>
    <?php

        if (isset($_POST['n']))
        {
            $n = $_POST['n'];

            for ($i=0; $i < $n; $i++)
            {
                echo '<pre>'; 
                for ($j=0; $j < $n - $i -1 ; $j++)
                { 
                    echo ' ';
                }

                for ($j=0; $j < $i + 1; $j++)
                { 
                    echo ($j + 1);
                }

                for ($j=$i; $j > 0 ; $j--)
                { 
                    echo $j;
                }
                echo '</pre>';
            }
        }
        else
        {
            echo '<form action="24.php" method="POST">';
            echo    '<p>';
            echo        '<label for="n">Introduce la altura de la prirámide: </label>';
            echo        '<input type="number" min="1" name="n">';  
            echo    '</p>';
            echo    '<input type="submit">';
            echo '</form>';        
        }

    ?>
</body>
</html>