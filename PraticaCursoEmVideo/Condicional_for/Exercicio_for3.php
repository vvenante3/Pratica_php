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
            $parametros = func_get_args();
            $total      = func_num_args();
            $soma       = 0;

            for($i=0; $i<$total; $i++) {
                $soma = $soma + $parametros[$i];
            }
            return $soma;
        }

        $resultado = soma(3,5,2);
        echo "A soma dos valores é $resultado";

    ?>
</body>
</html>