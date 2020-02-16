<?php
require 'Birds.php';

class Ostrich extends Birds
{
    public function run()
    {
       echo "走る";
    }
}

$ostrich = new Ostrich();
$ostrich->run();
$ostrich->fly();