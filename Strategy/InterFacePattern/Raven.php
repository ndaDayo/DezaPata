<?php
namespace InterFacePattern;

use InterFacePattern\Flyable;
use App\Birds;

class Raven extends Birds implements Flyable
{
    public function fly()
    {
        echo  "飛びますよインターフェイス";
    }
}