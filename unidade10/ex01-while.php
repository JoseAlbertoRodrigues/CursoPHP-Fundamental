<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL - 323. While</title>
</head>
<body>
    <?php
        $contador = 1;
        while ($contador <= 10) {
            // echo "José e maria" . "<br>";
            $sorteio = rand(1, 60);
            echo $sorteio . " ";
            $contador++;
        }
    ?>
</body>
</html>