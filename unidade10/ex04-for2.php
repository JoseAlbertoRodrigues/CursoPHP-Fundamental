<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL - 326. For - Exemplo 2</title>
</head>
<body>
    <?php
        for ($_contador = 7 ; $_contador > 0 ; $_contador --) {
            $_sorteio = rand(1,60);
            echo $_sorteio . " ";
        }
        echo "<br>";
        echo "<br>";

        for ($i=100; $i > 90; $i--) {
            echo $i . "<br>";
        }
    ?>
</body>
</html>