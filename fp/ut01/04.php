<!DOCTYPE html>
<!-- 
Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque
 se puede hacer íntegramente en HTML (igual que los ejercicios anteriores),
  ve intercalando código HTML y PHP para familiarizarte con éste último.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01.04</title>
</head>
<body>
    <table border=1>
        <tr>
            <th></th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
    
    <?php
        echo '  <tr>
                    <th>8:30 a 9:30</th>
                    <td rowspan="2">DWEC</td>
                    <td rowspan="2">EIE</td>
                    <td rowspan="2">DWES</td>
                    <td>DAW</td>
                    <td rowspan="2">DIW</td>
                </tr>';
    ?>
       
        <tr>
            <th>9:30 a 10:30</th>
            <td>EIE</td>
        </tr>

        <tr>
            <th>10:30 a 11:00</th>
            <td colspan="5">RECREO</td>
        </tr>

        <tr>
            <th>11:00 a 12:00</th>
            <td rowspan="2">DIW</td>
            <td rowspan="2">DAW</td>
            <td rowspan="2">DIW</td>
            <td>EIE</td>
            <td rowspan="2">DWES</td>
        </tr>

    <?php
        echo '  <tr>
                    <th>12:00 a 13:00</th>
                    <td rowspan="3">DWES</td>
                </tr>';
    ?>

        <tr>
            <th>13:00 a 14:00</th>
            <td rowspan="2">DWES</td>
            <td rowspan="2">DWES</td>
            <td rowspan="2">DWEC</td>
            <td rowspan="2">DWEC</td>
        </tr>

        <tr>
            <th>14:00 a 15:00</th>
        </tr> 
    </table>
</body>
</html>