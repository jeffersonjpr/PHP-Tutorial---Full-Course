<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting user input</title>
</head>

<body>

    <form action="postget.php" method="post">
        Password: <input type="password" name="password">
        <br>
        <input type="submit" value="submit">
    </form>
    <br>
    Senha: <?php echo $_POST["password"] ?>

</body>

</html>