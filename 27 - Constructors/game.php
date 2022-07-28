<?php

class Game{
    var $title;
    var $developer;
    var $year;

    function __construct($title, $developer, $year)
    {
        $this->title = $title;
        $this->developer = $developer;
        $this->year = $year;
    }

    function printGameInfo()
    {
        echo $this->title . " - " . $this->developer . " - " . $this->year . "<br>";
    }
}

?>