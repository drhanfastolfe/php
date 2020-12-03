<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoltar</title>
</head>
<body>
    <?php

        if (isset($_POST['n']))
        {
            $n = (int)$_POST['n'];
            $nSecreto = $_POST['nSecreto'];
        }
        else
        {
            $nSecreto = 14;
            $n = 1.5;            
        }


        if ($n == $nSecreto)
        {
            echo '<h1>ZOLTAR</h1>';
            echo '<p>Adivina un número entre 1 y 100</p>';
            echo '<p>Has acertado!! Era el número ' . $nSecreto . '</p>';
            echo '<a href="zoltar.php">Volver a jugar</a>';
        }
        else
        {
            if (is_null($n))
            {
                ?>
                <h1>ZOLTAR</h1>
                <p>Adivina un número entre 1 y 100</p>
                <form action="zoltar.php" method="POST">
                    <label for="n">Introduce un número: </label>
                    <input type="number" name="n">
                    <input type="hidden" name="nSecreto" value="<?php echo $nSecreto?>">
                    <br><br>
                    <p>No ha escrito ningún número.</p>
                    <input type="submit" value="Probar">
                </form>
                <?php        
            }
            elseif ($n < 1 || $n > 100)
            {
                ?>
                <h1>ZOLTAR</h1>
                <p>Adivina un número entre 1 y 100</p>
                <form action="zoltar.php" method="POST">
                    <label for="n">Introduce un número: </label>
                    <input type="number" name="n">
                    <input type="hidden" name="nSecreto" value="<?php echo $nSecreto?>">
                    <br>
                    <p> No ha escrito un número entero positivo entre 1 y 100.</p>
                    <input type="submit" value="Probar">
                </form>
                <?php    
            }
            else
            {
                ?>
                <h1>ZOLTAR</h1>
                <p>Adivina un número entre 1 y 100</p>
                <form action="zoltar.php" method="POST">
                    <label for="n">Introduce un número: </label>
                    <input type="number" name="n">
                    <input type="hidden" name="nSecreto" value="<?php echo $nSecreto?>">
                    <br>
                    <?php
                        if (is_int($n))
                        {
                            if ($n > $nSecreto)
                            {
                                echo '<p>Demasiado grande</p>';
                            }
                            else
                            {
                                echo '<p>Demasiado pequeño</p>';   
                            }
                        }
                    ?>
                    <input type="submit" value="Probar">
                </form>
                <?php
            }

        }
    ?>
</body>
</html>