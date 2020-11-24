<!-- Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>out02-t03-09</title>
</head>
<body>
    <?php

        if (isset($_POST['num']))
        {
            $num = $_POST['num'];
            $numTmp = abs($num);
            $digitos = 1;

            while ($numTmp > 9)
            {
                $digitos++;
                $numTmp = (floor)($numTmp / 10);
            }

            echo '<p>' . $num . ' tiene ' . $digitos . ' digitos</p>';
        }
        else
        {
            echo '<form action="09.php" method="POST">';
            echo    '<p>';
            echo        '<label for="num">Introduce un número: </label>';
            echo        '<input type="number" name="num">';
            echo    '</p>';
            echo    '<input type="submit">';
            echo '</form>';    
        }

    ?>
</body>
</html>