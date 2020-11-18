<!-- Escribe un programa que diga cuál es la primera y última cifra de un número entero introducido por teclado. Se permiten números de hasta 5 cifras. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut01-t02-17-02</title>
</head>
<body>
    <?php

        // $num = (int)$_POST['num'];
        // $numStr = (string)$num;

        // if ($num < 0)
        // {
        //     $numStr = substr($numStr, 1, strlen($numStr) - 1);
        //     $numStr = str_split($numStr);
        // }
        // else
        // {
        //     $numStr = str_split($numStr);
        // }


        // echo '<p>La primera cifra es ' . $numStr[0] . ' y la última es ' . $numStr[count($numStr) -1] . '</p>';

        $num = abs((int)$_POST['num']);

        $ultimaCif = $num % 10;
        $primeraCif = $num;
        

        while ($primeraCif > 9)
        {
            $primeraCif = floor($primeraCif / 10);
        }

        echo '<p>La primera cifra es ' . $primeraCif. ' y la última es ' . $ultimaCif . '</p>';

    ?>
</body>
</html>