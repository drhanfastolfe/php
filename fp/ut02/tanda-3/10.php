<!-- Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t03-10</title>
</head>
<body>
    <!-- <?php

        if (isset($_POST['num']))
        {
            if ($_POST['num'] < 0)
            {
                $nSum = (int)$_POST['nSum'];
                $nCont = (int)$_POST['nCont'];
                $media = $nSum / $nCont;
                
                echo '<p>La media es: ' . $media . '</p>';
            }
            else
            {
                $num = (int)$_POST['num'];
                $nSum = (int)$_POST['nSum'] + $num;
                $nCont = (int)$_POST['nCont'] + 1;
                echo '<form action="10.php" method="POST">';
                echo    '<p>';
                echo        '<label for="num">Introduce un número (negativo para terminar): </label>';
                echo        '<input type="number" name="num">';
                echo        '<input type="hidden" value="' . $nSum . '" name="nSum">';
                echo        '<input type="hidden" value="' . $nCont . '" name="nCont">';   
                echo    '</p>';
                echo    '<input type="submit">';
                echo '</form>';    
            }
            
        }
        else
        {
            echo '<form action="10.php" method="POST">';
            echo    '<p>';
            echo        '<label for="num">Introduce un número (negativo para terminar): </label>';
            echo        '<input type="number" name="num">';   
            echo    '</p>';
            echo    '<input type="submit">';
            echo '</form>';
        }

    ?> -->

    <?php

        if (!isset($_POST['num']))
        {
            $num = 0;
            $nSum = 0;
            $nCont = 0;
        }
        else
        {
            $num = (int)$_POST['num'];
            $nSum = (int)$_POST['nSum'];
            $nCont = (int)$_POST['nCont'];
            $nCont++;
        }

        if ($num >= 0)
        {
            $nSum += $num;
            echo '<form action="10.php" method="POST">';
            echo    '<p>';
            echo        '<label for="num">Introduce un número (negativo para terminar): </label>';
            echo        '<input type="number" name="num">';
            echo        '<input type="hidden" value="' . $nSum . '" name="nSum">';
            echo        '<input type="hidden" value="' . $nCont . '" name="nCont">';   
            echo    '</p>';
            echo    '<input type="submit">';
            echo '</form>';
        }
        else
        {
            $nSum = (int)$_POST['nSum'];
            $nCont = (int)$_POST['nCont'];
            $media = $nSum / $nCont;
            
            echo '<p>La media es: ' . $media . '</p>';
        }

    ?>

</body>
</html>