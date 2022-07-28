<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>including php</title>
</head>

<body>

    <?php
    $title = "Including PHP";
    $author = "Mike";
    $word_count = "500";
    include "article-header.php";
    include "useful-tools.php";

    sayhello("Jeff");
    echo "<br>";
    echo $minutesinday;
    ?>

</body>

</html>