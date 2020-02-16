<?php
namespace Bird;

use Bird\FlyableBirds;
use FlyBehavior\FlyHigh;

class Owl extends FlyableBirds
{
    public function __construct()
    {
        $this->flyBehavior = new FlyHigh();
    }

    function display()
    {
        // TODO: Implement display() method.
        echo "ふくろうですよ〜";
    }
}