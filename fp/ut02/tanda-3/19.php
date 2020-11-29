<!-- Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen de las 5 que se deben dar a elegir mediante un formulario. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t03-19</title>
</head>
<body>
    <?php

        if (isset($_POST['altura']))
        {
            $altura = $_POST['altura'];

            
            for ($i=0; $i < $altura; $i++)
            {
                echo '<pre>'; 
                for ($j=0; $j < $altura - $i -1 ; $j++)
                { 
                    echo ' ';
                }

                for ($j=0; $j < (($i+1)*2) - 1; $j++)
                { 
                    echo '*';
                }
                echo '</pre>';
            }
            
        }
        else
        {
            echo '<form action="19.php" method="POST">';
            echo    '<p>';
            echo        '<label for="altura">Introduce la altura de la prirámide: </label>';
            echo        '<input type="number" min="1" name="altura">';  
            echo    '</p>';
            echo    '<input type="submit">';
            echo '</form>';    
        }

    ?>
</body>
</html>