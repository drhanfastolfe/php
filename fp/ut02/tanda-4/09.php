<!-- Realiza un programa que pida 10 números por teclado y que los almacene en un array. A continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno. Al final se debe mostrar el array resultante. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t04-08</title>
    <style>
        table, th, td
        {
            border: 1px solid black;
            text-align: center;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
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
        if (!isset($_POST['p1']))
        {
            array_push($nums, $n);
        }
    }
    else
    {
        $nums = [];
    }

    if (count($nums) === 10)
    {
        echo '<table>';
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
        echo '</table><br>';

        if (isset($_POST['p1']))
        {
            $p1 = (int)$_POST['p1'];
            $p2 = (int)$_POST['p2'];

            $numsFinal = [];

            for ($i=0; $i < count($nums); $i++)
            { 
                if ($i > $p1 && $i < $p2)
                {
                    $numsFinal[$i] = $nums[$i];
                }
                elseif ($i <= $p1)
                {
                    if ($i === 0)
                    {
                        $numsFinal[$i] = $nums[count($nums) - 1];    
                    }
                    else
                    {
                        $numsFinal[$i] = $nums[$i - 1];
                    }
                }
                else
                {
                    if ($i === $p2)
                    {
                        $numsFinal[$i] = $nums[$p1];
                    }    
                    else
                    {
                        $numsFinal[$i] = $nums[$i - 1];
                    }
                }
            }

            echo '<table>';
            echo    '<tr><th colspan="10">Array final</th></tr>';
            echo    '<tr>';
            for ($i=0; $i < 10; $i++)
            { 
                echo '<td>' . $i . '</td>';
            }
            echo    '</tr>';
            echo    '<tr>';
            foreach ($numsFinal as $num)
            {
                echo '<td>' . $num . '</td>';
            }   
            echo    '</tr>';
            echo '</table><br>';
        }
        else
        {
        ?>
            <form action="09.php" method="POST">
                <label for="p1">Introduce la posición inicial: </label>
                <input type="number" name="p1" min="0" max="9" autofocus>
                <br><br>
                <label for="p2">Introduce la posición final: </label>
                <input type="number" name="p2" min="0" max="9">
                <br><br>
        <?php
                foreach ($nums as $num)
                {
                    echo '<input type="hidden" name="nums[]" value="' . $num . '">';
                }
                echo '<input type="hidden" name="n" value="' . $n . '">';
        ?>
                <input type="submit">
            </form>
        <?php
        }
    }
    else
    {
    ?>
        <form action="09.php" method="POST">
            <label for="n">Introduce el número: </label>
            <input type="number" name="n" min="0" autofocus>
            <br>
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