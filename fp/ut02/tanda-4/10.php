<!-- Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos suman según el juego de la brisca. Emplea un array asociativo para obtener los puntos a partir del nombre de la figura de la carta. Asegúrate de que no se repite ninguna carta, igual que si las hubieras cogido de una baraja de verdad. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t04-10</title>
</head>
<body>
    <?php

        $baraja = array(1 => 11, 2 => 0, 3 => 10, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 2, 9 => 3, 10 => 4, 11 => 11, 12 => 0, 13 => 10, 14 => 0, 15 => 0, 16 => 0, 17 => 0, 18 => 2, 19 => 3, 20 => 4, 21 => 11, 22 => 0, 23 => 10, 24 => 0, 25 => 0, 26 => 0, 27 => 0, 28 => 2, 29 => 3, 30 => 4, 31 => 11, 32 => 0, 33 => 10, 34 => 0, 35 => 0, 36 => 0, 37 => 0, 38 => 2, 39 => 3, 40 => 4);

        $random10;

        while (count($random10) < 10)
        {
            $nRandom = rand(1, 40);

            if(!array_key_exists($nRandom))
            {
                $random10[$nRandom] = $baraja[$nRandom];
            }
        }

        $puntos = array_sum($random10);

        echo '<p>Las 10 cartas al azar suman: ' . $puntos . ' puntos.</p>';
        print_r($random10);
    ?>
</body>
</html>