<!-- Realiza un conversor de pesetas a euros. La cantidad en pesetas que
 se quiere convertir se deberá introducir por teclado. -->
<?php

    $pesetas = (float)$_POST['pesetas'];
    $euros = $pesetas / 166.386;

    echo $pesetas . ' son ' . round($euros, 2) . '€';

?>