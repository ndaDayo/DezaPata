<?php

namespace App\Decorators\Packs;

use App\Decorators\PlanDecorator;
use App\Interfaces\PlanInterface;

/**
 * ホテルパック
 *
 * @package App\Decorators\Packs
 */
class HotelPack extends PlanDecorator
{
    private $hotel_name;

    private $additional_cost = 0;

    /**
     * HotelPack constructor.
     *
     * @param PlanInterface $obj
     * @param               $hotel_name
     * @param               $additional_cost
     */
    public function __construct(PlanInterface $obj, $hotel_name, $additional_cost)
    {
        parent::__construct($obj);
        $this->hotel_name = $hotel_name;
        $this->additional_cost = $additional_cost;
    }

    /**
     * 旅行プランとホテル名を返す
     *
     * @return string
     */
    public function getPlan()
    {
        return sprintf('%s / ホテルパック（%s）', parent::getPlan(), $this->hotel_name);
    }

    /**
     * ホテルの費用を返す
     *
     * @return string
     */
    public function getCost()
    {
        return parent::getCost() + $this->additional_cost .'円';
    }
}