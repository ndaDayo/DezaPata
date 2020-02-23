<?php
namespace App\Interfaces;

use App\Interfaces\ObserverInterface;

interface SubjectInterface
{
    public function addObserver(ObserverInterface $listener);
    public function removeObserver(ObserverInterface $listener);
    public function notify();
}