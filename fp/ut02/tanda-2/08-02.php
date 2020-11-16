<!-- Amplía el programa anterior para que diga la nota del 
boletín (insuficiente, suficiente, bien, notable o sobresaliente). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t02-07-02</title>
</head>
<body>
    <?php

        $nota1 = (float)$_POST['nota1'];
        $nota2 = (float)$_POST['nota2'];
        $nota3 = (float)$_POST['nota3'];

        $notaMedia = round((($nota1 + $nota2 + $nota3) / 3), 2);
        $boletin = '';

        if ($notaMedia < 5)
        {
            $boletin = 'Insuficiente';
        }
        elseif (5 <= $notaMedia && $notaMedia < 6)
        {
            $boletin = 'Suficiente';
        }
        elseif (6 <= $notaMedia && $notaMedia < 7)
        {
            $boletin = 'Bien';
        }
        elseif (7 <= $notaMedia && $notaMedia < 9)
        {
            $boletin = 'Notable';
        }
        elseif (9 <= $notaMedia && $notaMedia < 10)
        {
            $boletin = 'Sobresaliente';
        }
        else
        {
            $boletin = 'Nota inválida';
        }
        echo '<p>La nota es: ' . $boletin . '</p>';
        
    ?>
</body>
</html>