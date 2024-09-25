<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
           $data1 = new DateTime("2023-01-01");
           $data2 = new DateTime("2024-04-03");
           $intervalo = $data1->diff($data2);

        ?>

        <pre>
            <?php
                print_r($intervalo);
            ?>
        </pre>

        <pre>
            <?php
                echo "<br>";
                print_r($intervalo->format("%y") . " ano" . "<br>");
                print_r($intervalo->format("%m") . " mês" . "<br>");
                print_r($intervalo->format("%a") . " days");
            ?>

            <!-- invert "%r", mostra se a data é positiva ou negativa -->
            <!-- print_r($intervalo->format("%r%a") . " days"); -->

        </pre>
    </body>
</html>