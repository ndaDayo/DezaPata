<?php

namespace App;

class LightOnCommand implements Command
{
    /** @var Light */
    public $light;

    /**
     * LightOnCommand constructor.
     *
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    /**
     *
     */
    public function execute()
    {
        $this->light->on();
    }
}