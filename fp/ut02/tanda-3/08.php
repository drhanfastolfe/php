<!-- Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla (<table> en HTML). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t03-08</title>
</head>
<body>
    <?php

        if (isset($_POST['num']))
        {
            $num = $_POST['num'];
            echo '<table>';
            for ($i=1; $i<=10; $i++)
            { 
                echo '<tr>';
                echo    '<td>' . $num . ' x ' . $i . ' = </td>';
                echo    '<td>' , $num * $i , '</td>';
                echo '</tr>';
            }
            echo '</table>';    
        }
        else
        {
            echo '<form action="08.php" method="POST">';
            echo    '<p>';
            echo        '<label for="num">Introduce un número:</label>';
            echo        '<input type="number" name="num">';
            echo    '</p>';
            echo    '<input type="submit">';
            echo '</form>';
        }

    ?>
</body>
</html>
