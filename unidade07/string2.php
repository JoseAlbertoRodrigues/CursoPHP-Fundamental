<?php
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 300. Funções de Strings</title>
    </head>

    <body>

        <?php
            // strlen - Retorna primeira ocorrencia
            // echo strlen($_nome);

            // stripos  - Retorna primeira ocorrência
            // echo strrpos($_nome, "s");

            // strripos - Retorna última ocorrência
            // echo strripos($_nome, "a")

            // strtolower - converte para letras min.
            echo strtolower($_nome);

            // strtoupper - converte para letras min.
            echo "\f" . strtoupper($_nome);

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            echo SUBSTR_COUNT($_nome, "P");
        ?>


    </body>
</html>