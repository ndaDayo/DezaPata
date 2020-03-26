<?php

namespace App;

class SimpleRemoteControl
{
    public $slot;

    /**
     * @param Command $command
     */
    public function setCommand(Command $command)
    {
      $this->slot = $command;
    }

    /**
     *
     */
    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}