<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL - 317. Operador ternário na prática</title>
    </head>
    <body>
        <?php
            $idade = 17;
            $maiorIdade = ($idade >= 18)? "de maior" : "de menor";

            echo $maiorIdade;
        ?>
    </body>
</html>