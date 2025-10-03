<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Rotina 2</title>
</head>
<body>
    <?php

        function exemplo($x) {
            $x = $x + 2;
            //echo $x;
        }

        $a = 3;
        exemplo($a);
        echo $a;

    ?>
    <br><br>
    <?php
        // Passagem por REFERÊNCIA
        function exemplo2(&$x) {
            $x = $x + 5;
            //echo $x;
        }

        $a = 2;
        exemplo2($a);
        echo $a;

    ?>
</body>
</html>