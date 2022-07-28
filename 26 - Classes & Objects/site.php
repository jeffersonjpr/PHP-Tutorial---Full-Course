<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and objects</title>
</head>

<body>

    <?php

    include "book.php";

    $book1 = new Book();
    $book1->title = "Neuromancer";
    $book1->author = "William Gibson";
    $book1->pages = "320";

    $book2 = new Book();
    $book2->title = "Lord of the Rings";
    $book2->author = "J.R.R. Tolkien";
    $book2->pages = "1254";

    function printBookInfo($book)
    {
        echo $book->title . " - " . $book->author . " - " . $book->pages . " pages" . "<br>";
    }

    printBookInfo($book1);
    printBookInfo($book2);
    ?>

</body>

</html>