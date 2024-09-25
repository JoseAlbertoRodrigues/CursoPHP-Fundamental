<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 336. Mostrar Hora</title>
    </head>

    <body>
        <?php
            // determinar timezone
            // date_default_timezone_set('US/Eastern');
            date_default_timezone_set('Brazil/East');
            $_agora = getdate();
            // print_r($_agora);

            // criar elementos
            $segundo = $_agora["seconds"];
            $minuto = $_agora["minutes"];
            $hora = $_agora["hours"];

            $dia = $_agora["mday"];
            $mes = $_agora["mon"];
            $ano = $_agora["year"];


            echo "RELÓGIO" . "<br>";
            echo $hora . ":" . $minuto . ":" . $segundo;
            echo " - " . $dia . "/" . $mes . "/" . $ano;

        ?>
    </body>
</html>