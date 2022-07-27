<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function getMax($numbers)
    {
        $max = $numbers[0];
        foreach ($numbers as $number)
            if ($number > $max)
                $max = $number;
        return $max;
    }

    function getMin($numbers)
    {
        $min = $numbers[0];
        foreach ($numbers as $number)
            if ($number < $min)
                $min = $number;
        return $min;
    }

    echo getMax([11, 13, -2, -4, 0, 1, 3, 50, 2, 8, -9]) . "<br>";
    echo getMin([11, 13, -2, -4, 0, 1, 3, 50, 2, 8, -9]);
    ?>
</body>

</html>