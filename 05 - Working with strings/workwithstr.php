<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data types</title>
</head>

<body>

    <?php

    $phrase = "Battlemages Academy";
    echo strtolower($phrase) . "<br>";
    echo strtoupper($phrase) . "<br>";
    echo strlen($phrase) . "<br>";
    echo $phrase[0] . $phrase[12] . "<br>";
    $phrase[10] = " ";
    echo ($phrase) . "<br>";
    echo str_replace("Battlemage", "Sourcerer", $phrase) . "<br>";
    echo substr($phrase, 12, 4) . "<br>";
    ?>

</body>

</html>