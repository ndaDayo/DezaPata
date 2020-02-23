<?php
namespace App\Subject;

use App\Subject\Subject;

class SMS extends Subject
{
    private $time;

    public function notifyObservers()
    {
        /** @type Observer $observer */
        foreach ($this->observers as $observer) {
            $observer->notify($this->time);
        }
    }

    public function IAmHome($time = null)
    {
        $this->time = $time ? date('h時i分s秒', $time) : date('h時i分s秒');
        $this->notifyObservers();
    }
}