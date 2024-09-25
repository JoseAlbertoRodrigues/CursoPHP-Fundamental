<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 301. Funções numéricas</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo $salario * $meses . "</br>";
            echo $salario / 2 . "</br>";

            // Exponencial
            echo "Raiz quadrada: " . pow(6,3) . "</br>";

            // Raiz Quadrada

            // Randômico Generica
            echo "Randomico: " . rand(1,5) . "</br>";

            // Randômico entre um intervalo
            echo "Randomico no intervalo " . rand() . "</br>";
            
            // Valor absoluto
            echo "Randomico no intervalo " . abs(-500) . "</br>";
            
        ?>
    </body>
</html>