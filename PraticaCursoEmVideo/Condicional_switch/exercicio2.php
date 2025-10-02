<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dia_semana = isset($_GET["dia"]) ? $_GET["dia"]:0;

        switch($dia_semana){
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Vai trabaiá vagaba";
                break;
            case 6:
            case 7: 
                echo "Durmi ZzzZzz";
                break;

            default:
                echo "dia da semana inválido";
        }
    ?>   

    <a href="exercicio2.html">Retornar</a>

</body>
</html>