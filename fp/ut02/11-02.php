<!-- Realiza un conversor de Kb a Mb. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-10-02</title>
</head>
<body>
    <?php

        $kb = (float)$_POST['kb'];
        $mb = round(($kb / 1000), 2);

        echo '<p>' . $kb . ' kilobytes son: ' . $mb . ' megabytes</p>';

    ?>
</body>
</html>