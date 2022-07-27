<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better calculator</title>
</head>

<body>

    <form action="bettercalculator.php" method="post">
        <input type="number" step="0.01" name="num1"> <br>
        OP: <input type="textbox" name="op"> <br>
        <input type="number" step="0.01" name="num2"> <br>
        <input type="submit" value="=">
    </form>

    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    function resultFormated($num)
    {
        return "Result is: " . $num;
    }

    if ($op == "+")
        echo resultFormated($num1 + $num2);
    else if ($op == "-")
        echo resultFormated($num1 - $num2);
    else if ($op == "*")
        echo resultFormated($num1 * $num2);
    else if ($op == "/")
        echo resultFormated($num1 / $num2);
    else
        echo "Invalid operator";
    ?>
</body>

</html>