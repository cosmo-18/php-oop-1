<?php

class Movies{
    public $title;
    public $year;
    public $genre;
    
    function __construct($_x, $_y, $_z)
    {
        $this->title = $_x;
        $this->year = $_y;
        $this->genre = $_z;

    }


}

?>