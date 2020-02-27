<?php

namespace App\Components;

use App\Interfaces\PlanInterface;

/**
 * Class TravelPlan
 *
 * @package App\Components
 */
class TravelPlan implements PlanInterface
{
    private $plan;

    private $cost = 0;

    private $duration;

    /**
     * プランを取得する
     *
     * @return mixed
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * プランをセットする
     *
     * @param $text
     */
    public function setPlan($text)
    {
        $this->plan = $text;
    }

    /**
     * 費用を取得する
     *
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * 費用をセットする
     *
     * @param $number
     */
    public function setCost($number)
    {
        $this->cost = $number;
    }

    /**
     * 旅行期間を取得する
     *
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * 旅行期間をセットする
     *
     * @param $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
}