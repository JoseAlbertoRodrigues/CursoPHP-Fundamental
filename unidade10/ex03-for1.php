<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL - 325. For - Exemplo 1</title>
</head>
<body>
    <?php
        $contador = 1;
        for ($i=1; $i < 10; $i++) {
            $sorteio = rand(1, 60);
            echo $sorteio . "<br>";
        }
    ?>
</body>
</html>