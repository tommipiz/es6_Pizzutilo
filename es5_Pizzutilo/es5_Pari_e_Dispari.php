<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pari e Dispari</title>
</head>
<body>
    <?php
        $numRand = rand(1,50);

        if ($numRand % 2 == 0 ) {
            echo "<p>Il numero $numRand è pari</p>";
        }else {
            echo "<p>Il numero $numRand è dispari</p>";
        }

    ?>

</body>
</html>