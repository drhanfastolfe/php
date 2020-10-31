<!DOCTYPE html>
<!-- 
Escribe un programa que muestre por pantalla 10 palabras en inglés 
junto a su correspondiente traducción al castellano. Las palabras deben estar 
distribuidas en dos columnas. Utiliza la etiqueta <table> de HTML.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01.03</title>
</head>
<body>
    <?php
        echo "<table>";
    ?>
    <tr>
        <th>Spanish</th>
        <th>English</th>
    </tr>
    <tr><td>azul</td><td>blue</td></tr>
    <tr><td>conocimiento</td><td>knowledge</td></tr>
    <tr><td>amor</td><td>love</td></tr>
    <tr><td>felicidad</td><td>happiness</td></tr>
    <tr><td>agua</td><td>water</td></tr>
    <tr><td>aire</td><td>air</td></tr>
    <tr><td>pastel</td><td>cake</td></tr>
    <tr><td>dinero</td><td>money</td></tr>
    <tr><td>libro</td><td>book</td></tr>
    <tr><td>bosque</td><td>forest</td></tr>
    <?php
        echo "</table>";
    ?>
</body>
</html>