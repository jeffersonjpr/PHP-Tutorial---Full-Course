<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>While loop</title>
</head>

<body>

<?php

        $index = 0;
        echo "<h2>While loop</h2>";
        while(++$index <= 6){
            echo $index . "<br>";
        }

        echo "<h2>Do while loop</h2>";
        $index = 0;
        do{
            echo $index . "<br>";
        }while (++$index <= 6);

?>

</body>

</html>