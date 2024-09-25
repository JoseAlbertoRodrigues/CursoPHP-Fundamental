<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL - Projeto unidade</title>
    </head>
    <body>
        <?php
            $megasena = array();
            $contador = 1;

            while ($contador < 7) {
                $sorteio = rand(1,60);

                // pesquisar se o número já existe
                // pode fazer dessas maneiras
                // if (in_array($sorteio, $megasena) != true)  ou
                // if (in_array($sorteio, $megasena) == false) ou

                // testando se é falso
                if (!in_array($sorteio, $megasena)) {
                    $megasena[] = $sorteio;
                    $contador++;
                }
            }

            sort($megasena);
        ?>

        <pre>
            <?php
                print_r($megasena);
            ?>
        </pre>
    </body>
</html>