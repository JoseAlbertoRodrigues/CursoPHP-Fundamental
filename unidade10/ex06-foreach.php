<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL - 328. Foreach - Exemplo 2</title>
</head>
<body>
    <?php
        // array associativo
        $agenda = array("nome" => "José",
                        "telefone" => "999-54544",
                        "salario" => 5900.60,
                        "fumante" => false);

        foreach($agenda as $contato => $valor) {
            echo $contato . ": " . $valor . "<br>";
        }
    ?>
</body>
</html>