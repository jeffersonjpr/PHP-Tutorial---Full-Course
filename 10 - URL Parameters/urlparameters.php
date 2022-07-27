<!-- http://localhost:4000/10%20-%20URL%20Parameters/urlparameters.php?name=dsf&age=50 -->
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>URL parameters</title>
    </head>

    <body>

        <form action="urlparameters.php" method="get">
            Name: <input type="text" name="name">
            <br>
            <input type="submit" value="submit">
        </form>
        <br>
        Name: <?php echo $_GET["name"] ?>
        <br>
        Age : <?php echo $_GET["age"] ?>
    </body>

    </html>