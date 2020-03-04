<?php
namespace App\Interfaces;

use App\Interfaces\ObserverInterface;

interface SubjectInterface
{
    /**
     * @param \App\Interfaces\ObserverInterface $listener
     * @return mixed
     */
    public function addObserver(ObserverInterface $listener);

    /**
     * @param \App\Interfaces\ObserverInterface $listener
     * @return mixed
     */
    public function removeObserver(ObserverInterface $listener);

    /**
     * @return mixed
     */
    public function notify();
}