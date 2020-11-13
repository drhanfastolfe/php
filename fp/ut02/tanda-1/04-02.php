<!-- Escribe un programa que sume, reste, multiplique y divida 
    dos números introducidos por teclado. -->
<?php

    $numero1 = (int)$_POST['numero1'];
    $numero2 = (int)$_POST['numero2'];

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $div = $numero1 / $numero2;

    echo 'Suma = ' . $suma . '<br>';
    echo 'Resta = ' . $resta . '<br>';
    echo 'Multliplicación = ' . $multi . '<br>';
    echo 'División = ' . $div . '<br>';
?>