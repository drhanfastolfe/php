<!DOCTYPE html>
<!--
    Escribe un programa que utilice las variables $x y $y. Asignales los valores
     144 y 999 respectivamente. A continuación, muestra por pantalla el valor de
      cada variable, la suma, la resta, la división y la multiplicación. 
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01.05</title>
</head>
<body>
    <?php
        $x = 144;
        $y = 999;

        echo '  $x = ' , $x, '<br>
                $y = ' , $y, '<br>
                $x + $y = ' , $x + $y , '<br>
                $x - $y = ' , $x - $y , '<br>
                $x / $y = ' , $x / $y , '<br>
                $x * $y = ' , $x * $y;
    ?>   
</body>
</html>