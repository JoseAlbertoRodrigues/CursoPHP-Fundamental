<?php
    $_nome = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Nome = " . $_nome . "<br>";
            echo "É nula: " . is_null($_nome) . "<br>";
        ?>
    </body>
</html>