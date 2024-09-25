<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL - 327. Foreach - Exemplo 1</title>
</head>
<body>
    <?php
    $_salada = array("laranja","uva","abacate", "tangerina");
    
    // for ($i=0; $i < count($_salada); $i++) {
    //     echo $_salada[$i] . "<br>";
    // }
    
    // for each
    foreach($_salada as $frutas) {
        echo $frutas . "<br>";
    }
    
    ?>
</body>
</html>