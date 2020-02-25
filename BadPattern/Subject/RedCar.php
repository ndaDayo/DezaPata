<?php

namespace BadPattern\Subject;

use BadPattern\Interfaces\Car;

class RedCar implements Car
{
    private $color;

    /**
     * RedCar constructor.
     *
     * @param $color
     */
    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     *
     */
    public function run()
    {
        echo $this->color . '色の車が走る';
    }
}