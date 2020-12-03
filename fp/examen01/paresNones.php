<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares y Nones</title>
</head>
<body>
    <?php

        $j1 = rand(0,5);
        $j2 = rand(0,5);
        $resultado1;
        $resultado2;
        $mano1 = '<img src="pares-y-nones/img/' . $j1 . '.svg" alt="' . $j1 . '" height="200">';
        $mano2 = '<img src="pares-y-nones/img/' . $j2 . '.svg" alt="' . $j2 . '" height="200">';

        if (($j1 + $j2) % 2 === 0)
        {
            $resultado1 = '<img src="pares-y-nones/img/gana.svg" alt="Gana" height="100">';
            $resultado2 = '<img src="pares-y-nones/img/pierde.svg" alt="Pierde" height="100">'; 
        }
        else
        {
            $resultado1 = '<img src="pares-y-nones/img/pierde.svg" alt="Pierde" height="100">';
            $resultado2 = '<img src="pares-y-nones/img/gana.svg" alt="Gana" height="100">';
        }

    ?>
    
    <h1>PARES Y NONES</h1>
    <p>Actualice la página para mostrar otra partida</p>
    <table>
        <tr>
            <th colspan="2">Jugador 1 (pares)</th>
            <th colspan="2">Jugador 2 (nones)</th>
        </tr>
        <tr>
            <td><?php echo $resultado1 ?></td>
            <td><?php echo $mano1 ?></td>
            <td><?php echo $mano2 ?></td>
            <td><?php echo $resultado2 ?></td>
        </tr>
    </table>
</body>
</html>