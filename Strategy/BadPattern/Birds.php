<?php

namespace App;

abstract class Birds
{
    public function eat()
    {
        echo "食べる";
    }

    public function sleep()
    {
        echo "寝る";
    }

    public function fly()
    {
        echo "飛ぶ";
    }

    public function describe()
    {
        echo "表示する";
    }
}