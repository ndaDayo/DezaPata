<?php
namespace Bird;

use FlyBehavior\FlyBehavior;
use Bird\Birds;

abstract class FlyableBirds extends Birds implements FlyBehavior
{
    protected $flyBehavior;

    public function fly()
    {
        // TODO: Implement fly() method.
        $this->flyBehavior->fly();
    }
}