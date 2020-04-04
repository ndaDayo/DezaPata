<?php

namespace App\Command;

use App\Command;

class AddSaltCommand extends Command
{
    /**
     * @return mixed
     */
    public function execute()
    {
            while ($this->beaker->isMelted()) {
                $this->beaker->addSalt(1);
                $this->beaker->mix();
            }
            return $this->beaker->note();
    }
}