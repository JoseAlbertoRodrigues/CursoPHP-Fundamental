<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL - 319. Operadores lógicos - exercício 1</title>
    </head>
    <body>
        <?php
            $fumante = true;
            if ($fumante) {
                echo "Você é fumante";
            } else {
                echo "Você não é fumante";
            }

            // se não é fumante
            $fumante = false;
            if ($fumante != true) {
                echo "Você não é fumante";
            } else {
                echo "Você é fumante";
            }

            // se a variável ela é falsa
            $fumante = false;
            if (!$fumante) {
                echo "Você não é fumante";
            } else {
                echo "Você é fumante";
            }
        ?>
    </body>
</html>