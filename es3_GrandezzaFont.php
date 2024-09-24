<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandezza Font</title>
</head>
<body>
    <?php   
        $grandezza = rand(16,60) . 'px';
        echo "<p>La grandezza è $grandezza</p>";

        echo "<p style='font-size:$grandezza'>Paragrafo la cui grandezza del font in pixel è un numero casuale compreso tra 16 e 60</p>";

    ?>
    
</body>
</html>