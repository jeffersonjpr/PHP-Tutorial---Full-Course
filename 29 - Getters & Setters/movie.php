<?php

class Movie
{
    public $title;
    private $rating;

    function __construct($title, $rating)
    {
        $this->title = $title;
        $this->setRating($rating);
    }

    function getRating()
    {
        return $this->rating;
    }

    function setRating($rating)
    {
        // G, PG, PG-13, R, NC-17
        if (in_array($rating, ["G", "PG", "PG-13", "R", "NC-17"])) {
            $this->rating = $rating;
        } else {
            $this->rating = "NR";
        }
    }
}
