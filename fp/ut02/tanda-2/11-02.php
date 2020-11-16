<!-- Escribe un programa que dada una hora determinada 
    (horas y minutos), calcule los segundos que faltan 
    para llegar a la medianoche. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t02-11-02</title>
</head>
<body>
    <?php

        $horas = (int)$_POST['horas'];
        $minutos = (int)$_POST['minutos'];

        $segDia = 3600 * 24;
        $segTranscurridos = ($horas * 3600) + ($minutos * 60);
        $segMediaNoche = $segDia - $segTranscurridos;

        echo '<p>Quedan ' . $segMediaNoche . ' segundos para la media noche<p>';

    ?>
</body>
</html>