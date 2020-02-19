<?php
namespace App\Interfaces;

use App\Interfaces\ObserverInterface;

class SubjectInterface
{
    public function addObserver(ObserverInterface $listener){}
    public function removeObserver(ObserverInterface $listener){}
    public function notify(){}
}