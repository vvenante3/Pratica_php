<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array dentro de Array</title>
</head>
<body>
    <?php

        $m = array( array(6,4),
                    array(4,9),
                    array(3,2));
        $m[0][1] = $m[2][0];

        print_r($m);


    ?>
</body>
</html>