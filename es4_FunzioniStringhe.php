<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni Stringhe</title>
</head>
<body>
    <?php
        $str = "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 
                (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, comes from a line in section 1.10.32.";

    
        echo "<p style='color: green;'> $str </p>";
 
        echo "<p style='color: blue;'>" .strtoupper($str). "</p>";

        echo "<p>Il numero di caratteri è <span style='color:red;'>" .strlen($str). "</span></p>";

        echo "<p>Il numero di parole è <span style='color:yellow;'>" .str_word_count($str)."</span></p>";

    ?>


</body>
</html>