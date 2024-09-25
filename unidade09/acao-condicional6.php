<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL - 321. Operadores lógicos - exercício 3</title>
    </head>
    <body>
        <?php
            $dia = "sábado";

            if ( $dia == "sábado" || $dia == "domingo" ) {
                echo "Pode descansar" . "<br>";
            } else {
                echo "Dia de trabalho" . "<br>";
            }


            $idade = 18;
            $sexo = "feminino";

            if ($idade >= 18 && $sexo == "feminino") {
                echo "Pode entrar na festa" . "<br>";
            } else {
                echo "Não pode entrar na festa" . "<br>";
            }
        ?>
    </body>
</html>