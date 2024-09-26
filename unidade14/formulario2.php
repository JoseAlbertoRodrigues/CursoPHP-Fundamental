<?php
    if(isset($_POST["formulario"])) {
        // print_r($_POST);

        $_nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição";
        $_email = isset($_POST["email"]) ? $_POST["email"] : "Sem definição";
    }

?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <!-- testar se não foi configurado - testando se essa condição é negativa-->
        <?php if(!isset($_POST["formulario"])) { ?>
            <!-- página de destino será a própria página -->
            <form action="formulario2.php" method="post">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome">
                
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                
                <!-- a informação que chega do outro lado é o que está no nome -->
                <input type="submit" name="formulario" value="Enviar Cadastro">
            </form>
        <?php
            } else {
                echo "Nome: " . $_nome . "<br>";
                echo "Email: " . $_email . "<br";
            }
        ?>
    </body>
</html>