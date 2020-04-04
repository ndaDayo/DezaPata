<?php

namespace App;

class MallarDuck implements Duck
{
    /**
     * @return mixed|string
     */
    public function quack()
    {
       return "ガーガー";
    }

    /**
     * @return mixed|string
     */
    public function fly()
    {
        return "飛んでます";
    }
}