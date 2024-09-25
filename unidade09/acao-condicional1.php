<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL - 313. Como funciona o IF e ELSE</title>
    </head>
    <body>
        <?php
            $a = 5;
            $b = 5;

            if ( $a > $b ) {
                echo "$a é MAIOR do que $b";
            } else if ( $a < $b ) {
                echo "$a é MENOR do que $b";
            } else {
                echo "$a é IGUAL a $b";
            }
        ?>
    </body>
</html>