<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL - 324. Do While</title>
</head>
<body>
    <?php

        // no do while primeiro ele faz, depois ele testa a condição
        $contador = 1;
        do {
            $sorteio = rand(1, 60);
            echo $sorteio . "<br>";
            $contador++;

        } while ($contador < 5)
    ?>
</body>
</html>