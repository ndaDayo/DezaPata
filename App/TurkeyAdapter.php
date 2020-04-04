<?php

namespace App;

class TurkeyAdapter implements Duck
{
    public $turkey;

    /**
     * TurkeyAdapter constructor.
     *
     * @param Turkey $turkey
     */
    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    /**
     * @return mixed|void
     */
    public function quack()
    {
        $this->turkey->gobble();
    }

    /**
     * @return mixed|void
     */
    public function fly()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}