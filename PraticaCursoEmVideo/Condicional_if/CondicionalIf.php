<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional IF</title>
</head>
<body>
    <?php
        $ano = isset($_GET["ano"]) ? $_GET["ano"]:1990;
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e tem $idade anos! <br><br>";

        if($idade >= 18 && $idade<=63) {
            $dirigir    = "pode dirigir";
            $votar      = "voto é obrigatório";
        } 
        elseif($idade >=16 && $idade<18 ){
                $dirigir    = "não pode dirigir";
                $votar      = "voto é opcional";
        }
        if($idade >64){
            $dirigir    = "pode dirigir";
            $votar      = "voto é opcional";
        }
        else{
            $dirigir    = "não pode dirigir";
            $votar      = "voto é inapto";
        }
        
        echo "Com a sua idade, seu $votar e $dirigir";
    ?>
</body>
</html>