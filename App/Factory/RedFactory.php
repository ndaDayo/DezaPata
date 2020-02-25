<?php

namespace App\Factory;

use App\Subject\RedCar;

class RedFactory extends CarFactory
{
    protected function create()
    {
        return new RedCar();
    }
}