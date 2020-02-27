<?php

namespace App\Interfaces;

/**
 * Interface PlanInterface
 *
 * @package App\Interfaces
 */
interface PlanInterface
{
    /**
     *
     * @return mixed
     */
    public function getPlan();

    /**
     * @param $text
     * @return mixed
     */
    public function setPlan($text);

    /**
     * @return mixed
     */
    public function getCost();

    /**
     * @param $number
     * @return mixed
     */
    public function setCost($number);
}

