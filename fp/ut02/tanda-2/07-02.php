<!-- Realiza un programa que calcule la media de tres notas. -->
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

        echo '<p>La nota media es: ' . $notaMedia . '</p>';
        
    ?>
</body>
</html>