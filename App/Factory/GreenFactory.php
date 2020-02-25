<?php

namespace App\Factory;

use App\Subject\GreenCar;

class GreenFactory extends CarFactory
{
    protected function create()
    {
       return new GreenCar();
    }
}