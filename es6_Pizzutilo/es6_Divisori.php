<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisori</title>
</head>
<body>
    <?php
        $N = rand(1,100);

        echo "<h4> Il numero è $N</h4>";


        echo "<ol>";
        for($i = 1 ; $i < 100; $i++) {
            if($N % $i == 0) {
                if($N != $i) {
                   echo "<ul>$i</ul>";
                }
            }
        }

        echo "</ol>";
        
    ?>


    
</body>
</html>