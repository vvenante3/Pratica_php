<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício FOR 02</title>
</head>
<body>
    <?php
        function soma() {
            // vetor
            $p = func_get_args(); // $p[0], $p[1], $p[2]...

            $tot = func_num_args(); //quantidade de argumentos dentro da variável

            $soma_valores = 0;

            for($i=0; $i<$tot; $i++){
                $soma_valores = $soma_valores + $p[$i];
            }
            return $soma_valores;
        }

    ?>
</body>
</html>