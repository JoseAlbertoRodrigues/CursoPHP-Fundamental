<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 311. Pesquisa dentro de um array </title>
    </head>

    <body>
        <?php 
            // 1 significa se encontrou o elemento, se existe   
            // echo "Existe o elemento? " . in_array("Laranja", $_salada);

            // ele retorna o elemento, e se existe mostra o valor da posição do elemento
            echo "Existe o elemento? " . array_search("Uva", $_salada);
        ?>
    </body>
</html>