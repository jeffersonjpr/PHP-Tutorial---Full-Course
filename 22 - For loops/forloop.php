<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loops</title>
</head>

<body>

    <?php

        $fila = array(23,12,56,34,76,34,12,45,67,89);
        echo "<h2>Ordem de atendimento</h2>";
        for($index = 0; $index < count($fila); $index++){
            echo ($index + 1) . "° Chamando a senha: " . $fila[$index] . "<br>";
        }

    ?>

</body>

</html>