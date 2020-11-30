<!-- Realiza un programa que pida 10 números por teclado y que los almacene en un array. A continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar el array resultante. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t04-08</title>
</head>
<body>
    <?php
    if (isset($_POST['n']))
    {
        $n = $_POST['n'];

        $nums = [];

        foreach ($_POST['nums'] as $num)
        {
            array_push($nums, $num);
        }
        array_push($nums, $n);
    }
    else
    {
        $nums = [];
    }

    if (count($nums) === 10)
    {
        echo '<table border="1" style="text-align:center">';
        echo    '<tr><th colspan="10">Array inicial</th></tr>';
        echo    '<tr>';
        for ($i=0; $i < 10; $i++)
        { 
            echo '<td>' . $i . '</td>';
        }
        echo    '</tr>';
        echo    '<tr>';
        foreach ($nums as $num)
        {
            echo '<td>' . $num . '</td>';
        }   
        echo    '</tr>';
        echo '</table>';

        $primos = [];
        $noPrimos = [];

        foreach ($nums as $num)
        {
            $esPrimo = true;

            for ($i=2; $esPrimo && $i < $num; $i++)
            { 
                if($num % $i === 0)
                {
                    $esPrimo = false;
                }
            }

            if ($num < 2)
            {
                $esPrimo = false;
            }

            if ($esPrimo)
            {
                array_push($primos, $num);
            }
            else
            {
                array_push($noPrimos, $num);
            }
        }

        for ($i=0; $i < 10; $i++)
        { 
            if($i < count($primos))
            {
                $nums[$i] = $primos[$i]; 
            }
            else
            {
                $nums[$i] = $noPrimos[$i - count($primos)];
            }
        }

        echo '<table border="1" style="text-align:center">';
        echo    '<tr><th colspan="10">Array final</th></tr>';
        echo    '<tr>';
        for ($i=0; $i < 10; $i++)
        { 
            echo '<td>' . $i . '</td>';
        }
        echo    '</tr>';
        echo    '<tr>';
        foreach ($nums as $num)
        {
            echo '<td>' . $num . '</td>';
        }   
        echo    '</tr>';
        echo '</table>';

        
    }
    else
    {
    ?>
        <form action="08.php" method="POST">
            <label for="n">Introduce el número: </label>
            <input type="number" name="n" min="0">
            <?php
            foreach ($nums as $num)
            {
                echo '<input type="hidden" name="nums[]" value="' . $num . '">';
            }
            ?>
            <input type="submit">
        </form>
    <?php
    }
    ?>
</body>
</html>