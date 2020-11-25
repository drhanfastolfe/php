<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t03-12</title>
</head>
<body>
    <?php

        if (isset($_POST['n']))
        {
            $n = (int)$_POST['n'];
            $anteFibo = 0;
            $postFibo = 1;
            $nFibo = 0;
            
            if ($n > 0)
            {
                echo '0';
            }
            if ($n > 1)
            {
                echo ', 1';
            }

            for ($i = 2; $i < $n; $i++)
            {
                $nFibo = $anteFibo + $postFibo;
                echo ', ' . $nFibo;
                $anteFibo = $postFibo;
                $postFibo = $nFibo; 
            }
        }
        else
        {
            echo '<form action="12.php" method="POST">';
            echo    '<p>';
            echo        '<label for="num">Introduce un número: </label>';
            echo        '<input type="number" min="1" name="n">';  
            echo    '</p>';
            echo    '<input type="submit">';
            echo '</form>';    
        }

    ?>
</body>
</html>