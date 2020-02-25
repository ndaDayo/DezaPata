<?php

namespace App\Subject;

use App\Interfaces\Car;

class GreenCar implements Car
{
    public function run()
    {
        echo 'red色の車が走る';
    }
}