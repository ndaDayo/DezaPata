<?php

namespace BadPattern\Subject;

use BadPattern\Interfaces\Car;

class GreenCar implements Car
{
    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function run()
    {
        echo $this->color . '色の車が走る';
    }
}