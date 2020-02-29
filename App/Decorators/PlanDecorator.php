<?php

namespace App\Decorators;

use App\Interfaces\PlanInterface;

/**
 * Class PlanDecorator
 *
 * @package App\Decorators
 */
abstract class PlanDecorator implements PlanInterface
{
    private $obj;

    /**
     * PlanDecorator constructor.
     *
     * @param PlanInterface $obj
     */
    public function __construct(PlanInterface $obj)
    {
        $this->obj = $obj;
    }

    /**
     * プランを取得する
     *
     * @return mixed
     */
    public function getPlan()
    {
        return $this->obj->getPlan();
    }

    /**
     * プランをセットする
     *
     * @param $text
     */
    public function setPlan($text)
    {
        $this->obj->setPlan($text);
    }

    /**
     * 費用を取得する
     *
     * @return mixed
     */
    public function getCost()
    {
        return $this->obj->getCost();
    }

    /**
     * 費用をセットする
     *
     * @param $number
     */
    public function setCost($number)
    {
        $this->obj->setCost($this->getCost() + $number);
    }
}