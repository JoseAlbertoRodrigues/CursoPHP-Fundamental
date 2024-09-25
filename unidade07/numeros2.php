<?php
    $salario = 1095;
    $gasolina = 4.55;
    $telefone = "4558-4582";
    // 303. Testar o tipo de números das variáveis
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 302. Números inteiros e racionais</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            // 0 = false ; 1 = true
            echo "O $salario é um número? " . is_numeric($salario) . "<br>";
            echo "O $gasolina é um número? " . is_numeric($gasolina) . "<br>";
            echo "O $telefone é um número? " . is_numeric($telefone) . "<br>";
            echo "<br>";
            
            // testar se é inteiro
            echo "O $salario é um inteiro? " . is_int($salario) . "<br>";
            echo "O $gasolina é um inteiro? " . is_int($gasolina) . "<br>";
            echo "O $telefone é um inteiro? " . is_int($telefone) . "<br>";
            echo "<br>";

            // testar se é float
            echo "O $salario é um racional? " . is_float($salario) . "<br>";
            echo "O $gasolina é um racional? " . is_float($gasolina) . "<br>";
            echo "O $telefone é um racional? " . is_float($telefone) . "<br>";
            echo "<br>";
        ?>
        
        
    </body>
</html>