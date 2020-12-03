<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Cartas</title>
</head>
<body>
    <?php

        $n = (int)$_POST['n'];
        $palo = (string)$_POST['palo'];

        if (($n < 1 || $n > 10))
        {
            echo '<p style="color:red">El número de cartas solicitado no está en el rango permitido.</p>';
        }
        else
        {
            $paloNombre = array('c' => 'corazones', 'd' => 'diamantes', 'p' => 'picas', 't' => 'trboles');

            $cartas = [];

            
            for ($i=0; $i < $n; $i++)
            { 
                $cartas[$i] = rand(1, 10);
            }

            $seguidas = false;

            $i = 0;
            while (!$seguidas && $i < count($cartas) - 1)
            {
                if (($cartas[$i] == $cartas[$i + 1]))
                {
                    $seguidas = true;
                }
                $i++;
            }

            $seguidasStr;
        
            if ($seguidas)
            {
                $seguidasStr = '<p>Hay cartas iguales seguidas.</p>';
            }
            else
            {
                $seguidasStr = '<p>No hay cartas iguales seguidas.</p>';
            }

            $pluralOsing;

            if (count($cartas) < 2)
            {
                $pluralOsing = 'carta';
            }
            else
            {
                $pluralOsing = 'cartas';
            }

            echo '<h1>MUESTRA CARTAS (RESULTADO)</h1>';
            echo '<h2>' . $n . ' ' . $pluralOsing . ' de ' . $paloNombre[$palo] . '</h2>';

            foreach ($cartas as $carta)
            {
                echo '<img src="muestra-cartas/img/' . $palo . $carta . '.svg" alt="' . $carta . '" width="100">';                
            }

            echo $seguidasStr;
        }

        echo '<a href="muestraCartasForm.html">Volver al formulario.</a>';
    ?>
</body>
</html>