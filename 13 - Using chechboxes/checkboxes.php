<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>

<body>

    <form action="checkboxes.php" method="post">
        Apples <input type="checkbox" name="fruits[]" value="Apples"> <br>
        Bananas <input type="checkbox" name="fruits[]" value="Bananas"> <br>
        Oranges <input type="checkbox" name="fruits[]" value="Oranges"> <br>
        Pinha <input type="checkbox" name="fruits[]" value="Pinha"> <br>
        Tangerine <input type="checkbox" name="fruits[]" value="Tangerine"> <br>
        <input type="submit" value="Submit"> <br>
    </form>
    <?php
    $fruits = $_POST["fruits"];
    echo "You like " . implode(", ", $fruits) . ".";
    ?>

</body>

</html>