<?php
    $_nome = "Mary Coutinho";
    $_telefone = "23243434";
    $_fumante = false;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 307. ISSET</title>
    </head>

    <body>
        <?php
            // nome existe
            echo isset($_nome);

            // saber se existe, não existe porque não foi criado
            // se for NULL não mostra nada
            echo isset($_email);
        ?>
    </body>
</html>