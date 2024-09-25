<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        function calcularDecimoTerceiro($salario, $mes) {
            return number_format($salario * $mes, 2);
        }

        echo calcularDecimoTerceiro(1000, 12) . "<br>";
        echo calcularDecimoTerceiro(1500, 12) . "<br>";

    ?>

<?php
        function retornarDiaria($salario, $dias) {
            return number_format( $salario/$dias, 2);
        }

        echo retornarDiaria(2500, 15) . "<br>";
        echo retornarDiaria(5000, 10) . "<br>";
    ?>
</body>
</html>