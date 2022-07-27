<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Returning</title>
</head>

<body>

    <?php
    function cube($number)
    {
        return $number ** 3;
    }

    echo "The cube of 5 is " . cube(5) . "<br>";
    echo "The cube of 10 is " . cube(10) . "<br>";
    ?>

</body>

</html>