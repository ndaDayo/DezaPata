<?php

namespace App;

abstract class Command
{
    /**
     * @var Beaker
     */
    public $beaker;

    /**
     * ビーカーをセットする
     * @param Beaker $beaker
     */
    public function setBeaker(Beaker $beaker)
    {
        $this->beaker = $beaker;
    }

    /**
     * @return mixed
     */
    public abstract function execute();
}
