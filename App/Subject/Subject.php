<?php
namespace App\Subject;

abstract class Subject
{
    protected $observers = array();

    public function registerObserver($observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver($observer)
    {
        $oid = $observer->id;

        $this->observers = array_filter($this->observers, function ($observer) use ($oid) {
            return $observer->id != $oid;
        });

    }

    abstract public function notifyObservers();
}