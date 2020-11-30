<!-- Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente. Los números que se han cambiado deben aparecer resaltados de un color diferente. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t04-04</title>
</head>
<body>
    <?php
    if (isset($_POST['n1']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        foreach ($_POST['nums'] as $n)
        {
            if ($n === $n1)
            {
                echo '<span style="color:red">' . $n2 . ' </span>';
            }
            else
            {
                echo $n . ' ';
            }
            
        }
    }
    else
    {
        $nums = [];
            
        for ($i=0; $i < 20; $i++)
        { 
            $nums[$i] = rand(0, 20);
        }

        foreach ($nums as $n)
        {
            echo $n . ' ';
        }
    ?>
        <form action="04.php" method="POST">
            <label for="n1">Introduce el número a cambiar: </label>
            <input type="number" name="n1">
            <br>
            <label for="n2">Introduce el número nuevo: </label>
            <input type="number" name="n2">
            <br>
            <?php
            foreach ($nums as $n)
            {
                echo '<input type="hidden" name="nums[]" value="' . $n . '">';
            }
            ?>
            <input type="submit">
        </form>
    <?php
    }
    ?>
</body>
</html>