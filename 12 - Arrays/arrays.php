<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    $cars = array("Subaru", "Civic");
    echo "I like " . $cars[0] . " and " . $cars[1] . "." . "<br>";
    $cars[1] = ("Mazda");
    $cars[2] = ("Ferrari");
    echo "Now I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "." . "<br>";
    echo "There are " . count($cars) . " cars that i like." . "<br>";
    ?>
</body>

</html>