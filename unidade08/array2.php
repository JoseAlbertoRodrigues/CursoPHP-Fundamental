<?php
    $_megasena = array(47,29,42,04,27,21);

    sort($_megasena)
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 310. Funções para Array</title>
    </head>

    <body>
        <?php
            // maior valor
            echo max($_megasena) . "<br>";
            // menor valor
            echo min($_megasena) . "<br>";
        ?>
        <pre>
            <?php
                print_r($_megasena);
            ?>
        </pre>
    </body>
</html>