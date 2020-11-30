<!-- Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t04-02</title>
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
        foreach ($nums as $n)
        {
            if ($n === max($nums))
            {
                echo $n . ' max<br>';
            }
            elseif ($n === min($nums))
            {
                echo $n . ' min<br>';
            }
            else
            {    
                echo $n . ' <br>';
            }
        }    
    }
    else
    {
    ?>
        <form action="02.php" method="POST">
            <label for="n">Introduce un número: </label>
            <input type="number" name="n">
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