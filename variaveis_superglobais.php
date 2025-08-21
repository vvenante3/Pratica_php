<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Variáveis Superglobais mais utilizadas</H1>
    <h4>$GLOBALS: Referencia todas as variáveis no escopo atual.</h4>
    <?php

    function globals()
    {
        $var1 = "dentro";

        echo '$var1 no escopo global <b>(de fora da função)</b>: '     . $GLOBALS["var1"] . "<p>";
        echo '$var1 no escopo atual <b>(de dentro da função)</b>: '    . $var1 ;
    }

    $var1 = "fora";
    globals();

    ?>  

    <h4>$_SERVER: Informação do servidor e ambiente de execução.</h4>   
    <?php   

    echo $_SERVER['SERVER_NAME'];

    ?>

    <h4>$_GET: Variáveis HTTP GET.</h4>  
    <?php

        echo "Olá" . htmlspecialchars($_GET["nome"]);

    ?>
        
    <h4>$_POST: Variáveis HTTP POST.</h4>          
    <?php 

        echo "Olá" . htmlspecialchars($_POST['nome']);

    ?>

    <h4>$_SESSION: Variáveis de sessão.</h4> 
    <?php

        // $_SESSION   =

    ?>

    <h4>$_SESSION: Variáveis de requisição HTTP.</h4> 
    <?php

        // $_REQUEST   =

    ?>

</body>
</html>