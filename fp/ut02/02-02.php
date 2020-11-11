<!-- Realiza un conversor de euros a pesetas. Ahora la cantidad en euros 
    que se quiere convertir se deberá introducir por teclado. -->
<?php

    $euros = $_POST['euros'];
    $pesetas = $euros * 166.386;
    echo  $euros . '€ son ' . round($pesetas) . ' pesetas';  

?>