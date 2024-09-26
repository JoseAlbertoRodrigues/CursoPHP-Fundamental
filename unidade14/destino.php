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
            // ? = if
            // : = else

            // if(isset($_POST["nome"])) {
            //     $_nome = $_POST["nome"];
            // } else {
            //     $_nome = "Sem definição";
            // }

            
            // if(isset($_POST["email"])) {
            //     $_email = $_POST["email"];
            // } else {
            //     $_email = "Sem definição";
            // }
            
            $_nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição";
            $_email = isset($_POST["email"]) ? $_POST["email"] : "Sem definicão";

            echo "Nome: " . $_nome . "<br>";
            echo "Email: " . $_email . "<br>";
            // echo "Nome: " . $_POST["nome"];
            // echo "Nome: " . $_POST["email"];

            // echo $_POST["nome"] . "<br>";
            // echo $_POST["email"] . "<br>";
        ?>
    </body>
</html>