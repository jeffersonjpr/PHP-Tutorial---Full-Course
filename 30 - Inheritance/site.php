<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>

    <?php

    include "chef.php";
    include "brazilianChef.php";

    $chef = new Chef();
    $brazilianChef = new BrazilianChef();

    $chef->makeChicken();
    $brazilianChef->makeChicken();
    $brazilianChef->makeFeijoada();
    echo "<hr>";
    $chef->makeSpecialDish();
    $brazilianChef->makeSpecialDish();

    ?>

</body>

</html>