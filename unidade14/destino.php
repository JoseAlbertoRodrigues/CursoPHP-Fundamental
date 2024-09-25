    <!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 343. Resgatar informações do formulário</title>
    </head>

    <body>
        <!-- <pre>
            <?php
                print_r($_POST);
            ?>
        </pre> -->

        <?php
            // isset => Pergunta se está configurada uma determinada variável

            if(isset($_POST["nome"])) {
                $_nome = $_POST["nome"];
            } else {
                $_nome = "Sem definição";
            }

            if(isset($_POST["email"])) {
                $_email = $_POST["email"];
            } else {
                $_email = "Sem definição";
            }

            echo "Nome: " . $_nome . "<br>";
            echo "Nome: " . $_email . "<br>";
            // echo "Nome: " . $_POST["nome"];
            // echo "Nome: " . $_POST["email"];

            // echo $_POST["nome"] . "<br>";
            // echo $_POST["email"] . "<br>";
        ?>
    </body>
</html>