<?php

    $pesetas = (float)$_POST['pesetas'];
    $euros = $pesetas / 166.386;

    echo $pesetas . ' son ' . round($euros, 2) . '€';

?>