<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative arrays</title>
</head>

<body>
    <form action="studentgrade.php" method="post">
        <input type="text" name="student">
        <input type="submit" value="Verify">
    </form>

    <?php
    $grades = array(
        "Jim" => 9.5,
        "Pam" => 8.5,
        "Oscar" => 7.5,
        "Dwight" => 6.5,
    );
    $grades["Dwight"] = 3.5;
    echo "<br>";
    echo implode(", ", array_keys($grades)) . "<br>";
    echo implode(", ", array_values($grades)) . "<br>";
    echo "<br>";
    echo "Verification = " . $grades[$_POST["student"]] . "<br>";
    ?>

</body>

</html>