<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch statements</title>
</head>

<body>
    <form action="switch.php" method="post">
        <input type="text" name="grade">
        <input type="submit" value="Submit">
    </form>

    <?php
    $grade = $_POST["grade"];
    switch (strtoupper($grade)) {
        case "A":
            echo "You did amazing!";
            break;
        case "B":
            echo "You did good!";
            break;
        case "C":
            echo "You did okay!";
            break;
        case "D":
            echo "You did bad!";
            break;
        case "F":
            echo "You did horrible!";
            break;
        default:
            echo "Invalid grade";
            break;
    }
    ?>

</body>

</html>