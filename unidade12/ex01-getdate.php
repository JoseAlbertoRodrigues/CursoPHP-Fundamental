<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL - 335. GetDate</title>
    </head>

    <body>
        <pre>
            <?php
                // determinar o horario padrão, de onde eu quero, ex: brasilia
                date_default_timezone_set('Brazil/East');
                $agora = getdate();
                echo print_r($agora);
            
            ?>
        </pre>
    </body>
</html>