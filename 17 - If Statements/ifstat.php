<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If statements</title>
</head>

<body>

    <?php
    $isMage = false;
    $isFire = false;

    if ($isMage && $isFire) {
        echo "You are a fire mage";
    } elseif ($isMage && !$isFire) {
        echo "You are a ice mage";
    } elseif (!$isMage && $isFire) {
        echo "You are a fire sourcerer";
    } else {
        echo "You are not a mage neither fire spellcaster";
    }

    ?>

</body>

</html>