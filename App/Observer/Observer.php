<?php
namespace App\Observer;

use App\Subject\Subject;

abstract class Observer
{
    public $id, $subject;

    abstract public function notify($time);

    function __construct(Subject $subject)
    {
        $this->id = uniqid();
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }
}