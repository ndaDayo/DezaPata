<?php

namespace App\Subject;

use App\Interfaces\Car;

class RedCar implements Car
{
    public function run()
    {
        echo 'red色の車が走る';
    }
}