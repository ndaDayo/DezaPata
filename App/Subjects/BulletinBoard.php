<?php

namespace App\Subjects;

use App\Interfaces\SubjectInterface;
use App\Interfaces\ObserverInterface;


class BulletinBoard implements SubjectInterface
{
    private $name;

    private $comments = [];

    private $listeners = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function comment($massage)
    {
        echo sprintf('%s: %s<br>', $this->getName(), $massage);
        $this->addComment($massage);
    }

    public function addComment($message)
    {
        $this->comment[] = $message;
        $this->notify();
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addObserver(ObserverInterface $listener)
    {
        // TODO: Implement addObserver() method.
        $this->listeners[get_class($listener)] = $listener;
    }

    public function removeObserver(ObserverInterface $listener)
    {
        // TODO: Implement removeObserver() method.
        $this->listeners[get_class($listener)];
    }

    public function notify()
    {
        // TODO: Implement notify() method.
        foreach ($this->listeners as $listener){
            $listener->execute($this);
        }
    }
}