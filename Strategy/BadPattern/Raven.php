<?php
require 'Birds.php';

class Raven extends Birds
{
    public function describe()
    {
        parent::describe(); // TODO: Change the autogen
    }
}

$raven = new Raven();
$raven->eat();