<?php

namespace BadPattern\Factory;

use BadPattern\Subject\GreenCar;
use BadPattern\Subject\RedCar;

class CarFactory
{
    /**
     * @param $color
     * @return GreenCar|RedCar
     */
    public function create($color)
    {
        if ($color == 'red') {
            return new RedCar($color);
        }
        if ($color == 'green') {
            return new GreenCar($color);
        }
    }
}