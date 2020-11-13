<!-- Realiza un conversor de Mb a Kb. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-10-02</title>
</head>
<body>
    <?php

        $mb = (float)$_POST['mb'];
        $kb = round(($mb * 1000), 2);

        echo '<p>' . $mb . ' megabytes son: ' . $kb . ' kilobytes</p>';

    ?>
</body>
</html>