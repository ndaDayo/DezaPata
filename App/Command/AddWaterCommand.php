<?php

namespace App\Command;

use App\Command;

class AddWaterCommand extends Command
{
    /**
     * @return mixed
     */
    public function execute()
    {
        while ($this->beaker->isMelted()) {
            $this->beaker->addWater(10);
            $this->beaker->mix();
        }
        return $this->beaker->note();
    }
}