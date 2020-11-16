<!-- Realiza un minicuestionario con 10 preguntas tipo test sobre 
    las asignaturas que se imparten en el curso. Cada pregunta 
    acertada sumará un punto. El programa mostrará al final la 
    calificación obtenida. Pásale el minicuestionario a tus compañeros 
    y pídeles que lo hagan para ver qué tal andan de conocimientos 
    en las diferentes asignaturas del curso. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut02-t02-12-02</title>
</head>
<body>
   <?php 

        $respuestas = array($_POST['pregunta1'], $_POST['pregunta2'], 
                            $_POST['pregunta3'], $_POST['pregunta4'], 
                            $_POST['pregunta5'], $_POST['pregunta6'], 
                            $_POST['pregunta7'], $_POST['pregunta8'], 
                            $_POST['pregunta9'], $_POST['pregunta10']);
        
        $respuestasCorrectas = array('respuesta01-03', 'respuesta02-01', 
                                    'respuesta03-02', 'respuesta04-03', 
                                    'respuesta05-03', 'respuesta06-02', 
                                    'respuesta07-02', 'respuesta08-01', 
                                    'respuesta09-01', 'respuesta10-03');

        $puntos = 0;
        
        for ($i=0; $i < 10; $i++)
        { 
            if ($respuestas[$i] == $respuestasCorrectas[$i])
            {
                $puntos++;
            }
        }

        echo '<p>Nota: ' . $puntos . '/10</p>';

    ?>
</body>
</html>