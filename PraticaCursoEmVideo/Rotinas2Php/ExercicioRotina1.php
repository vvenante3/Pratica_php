<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Rotina 1</title>
</head>
<body>
    <?php    

        function soma(&$num) {
            $num += 5;
            echo "<p>O valor de num é $num";
        }

        $n = 2;
        soma($n);
        echo "<p>O valor de n é $n";

    ?>
</body>
</html>