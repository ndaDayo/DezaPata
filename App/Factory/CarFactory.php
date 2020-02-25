<?php

namespace App\Factory;

abstract class CarFactory
{
    abstract protected function create();

    public function do()
    {
        $car = $this->create();
        $car->run();
    }
}