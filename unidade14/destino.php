    <!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 343. Resgatar informações do formulário</title>
    </head>

    <body>
        <pre>
            <?php
                print_r($_POST);
            ?>
        </pre>

        <?php
            echo $_POST["nome"] . "<br>";
            echo $_POST["email"] . "<br>";
        ?>
    </body>
</html>