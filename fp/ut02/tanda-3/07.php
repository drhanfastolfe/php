<!-- Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t03-07</title>
</head>
<body>
    <?php
        
        $numeroSecreto = 1234;

        if (!isset($_POST['oportunidades']))
        {
            $oportunidades = 5;
            $codigo = 12345;
        }
        else
        {
            $oportunidades = (int)$_POST['oportunidades'];
            $codigo = (int)$_POST['codigo'];
        }

        if ($codigo === $numeroSecreto)
        {
            echo '<p>La caja fuerte se ha abierto';
        }
        elseif ($oportunidades === 0)
        {
            echo '<p>Has agotado las oportunidades</p>';
        }
        else
        {
            echo '<form action="07.php" method="POST">';
            echo    '<p>';
            echo        '<label for="codigo">Introduce el código de la caja fuerte:</label>';
            echo        '<input type="number" max="9999" min="0" name="codigo">';
            echo    '</p>';
            echo    '<p>Oportunidades restantes: ' . $oportunidades . '</p>'; 
            $oportunidades--;
            echo    '<input type="hidden" value="' . $oportunidades . '" name="oportunidades">';
            echo    '<input type="submit">';
            echo '</form>';
        }

    ?>

    
</body>
</html>