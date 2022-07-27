<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Working with numbers</title>
</head>

<body>

    <?php

    echo 43.123456789012945677 . "<br>";
    echo round(43.123456789012945677, 2) . "<br>";
    echo 5.5 * 2 . "<br>";
    echo 10 % 3 . "<br>";
    echo (4 + 4) * 2 . "<br>";
    
    $num = 5;
    $num ++;
    echo $num . "<br>";
    $num += 6;
    echo $num . "<br>";

    echo abs(-5) . "<br>";
    echo pow(2, 4) . "<br>";
    echo sqrt(25) . "<br>";
    echo max(2, 32, 4, 5) . "<br>";
    echo ceil(2.1) . "<br>";
    
    ?>

</body>

</html>