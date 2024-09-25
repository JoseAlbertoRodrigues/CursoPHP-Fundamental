<?php
    $gasolina = 4.55;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 304. Arredondar variáveis</title>
    </head>

    <body>
        
        
        <?php
            // arredondar para media
            echo round($gasolina) . "<br>";

            // arredondar para cima
            echo ceil($gasolina) . "<br>";

            // arredondar para baixo
            echo floor($gasolina) . "<br>"


            
        ?>
        
        
    </body>
</html>