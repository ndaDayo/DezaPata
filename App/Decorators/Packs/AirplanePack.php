<?php
namespace App\Decorators\Packs;

use App\Decorators\PlanDecorator;
use App\Interfaces\PlanInterface;

/**
 * Class AirplanePack
 *
 * @package App\Decorators\Packs
 */
class AirplanePack extends PlanDecorator
{
    private $airlines;

    private $additional_cost = 0;

    /**
     * AirplanePack constructor.
     *
     * @param PlanInterface $obj
     * @param               $airlines
     * @param               $additional_cost
     */
    public function __construct(PlanInterface $obj, $airlines, $additional_cost)
    {
        parent::__construct($obj);
        $this->airlines  = $airlines;
        $this->additional_cost = $additional_cost;
    }

    /**
     * 旅行プランと航空会社を返す
     *
     * @return string
     */
    public function getPlan()
    {
        return sprintf('%s /飛行機パック (%s)',parent::getPlan(),$this->airlines);
    }

    /**
     * 飛行機代を返す
     *
     * @return string
     */
    public function getCost()
    {
        return parent::getCost() + $this->additional_cost;
    }
}