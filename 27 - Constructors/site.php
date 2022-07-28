<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and objects</title>
</head>

<body>

    <?php

    include "game.php";

    $game1 = new Game("Portal 2", "Valve", "2011");
    $game2 = new Game("Half-Life 2", "Valve", "2004");
    $game3 = new Game("Warcraft III", "Blizzard", "2002");
    

    $game1->printGameInfo();
    $game2->printGameInfo();
    $game3->printGameInfo();

    ?>

</body>

</html>