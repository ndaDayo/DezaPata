<?php

namespace Bird;

abstract class Birds
{
    abstract function __construct();

    abstract function display();

    public function sleep()
    {
        echo "寝ている";
    }

    public function eat()
    {
        echo "食べる";
    }
}

