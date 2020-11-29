<!-- Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t03-20</title>
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
                if ($i === 0)
                {
                    echo '*';
                }
                elseif ($i === $altura - 1) 
                {
                    for ($j=0; $j < (($i+1)*2) - 1; $j++)
                    { 
                        echo '*';
                    }
                }
                else
                {
                    echo '*';
                    for ($j=0; $j < (($i+1)*2) - 3; $j++)
                    { 
                        echo ' ';
                    }
                    echo '*';
                }
                echo '</pre>';
            }
            
        }
        else
        {
            echo '<form action="20.php" method="POST">';
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