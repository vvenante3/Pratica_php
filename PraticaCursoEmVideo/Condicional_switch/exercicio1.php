<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <?php

        $num        = isset($_GET["num"]) ? $_GET["num"]:0;
        $operacao   = isset($_GET["operador"]) ? $_GET["operador"]:1;

        switch($operacao) {
            case 1:
                $resultado = $num * 2;
                break;
            case 2:
                $resultado = $num ** 3;
                break;
            case 3:
                $resultado = sqrt($num);
        }

        echo "O resultado da operação foi $resultado";

    ?>

    <a href="exericio1.html">Voltar</a>
    
</body>
</html>