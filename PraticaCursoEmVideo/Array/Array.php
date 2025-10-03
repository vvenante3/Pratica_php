<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php

        // $vetor = array(3,5,8,2);
        // print_r($vetor);

        "<br><br>";

        $vetor = array(
                "nome"  => "Vitor",
                "idade" => 27,
                "peso"  => 78.8
        );
        
        foreach ($vetor as $chave => $campo){
            echo "O campo $chave possui o conteúdo $campo ";
        }

    ?>
</body>
</html>