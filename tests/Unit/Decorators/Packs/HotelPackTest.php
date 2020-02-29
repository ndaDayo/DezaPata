<?php

use App\Components\TravelPlan;
use App\Decorators\Packs\HotelPack;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2020-02-29 at 16:09:26.
 */
class HotelPackTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var HotelPack
     */
    protected $object;

    protected function setUp()
    {
        $plan_base = new TravelPlan();
        $plan_base->setPlan('旅行テスト');
        $this->object = new HotelPack($plan_base, 'ホテルテスト', 1000);
    }

    /**
     * @test
     *
     */
    public function testGetPlan()
    {
        $this->assertEquals('旅行テスト / ホテルパック (ホテルテスト)', $this->object->getPlan());
    }

    /**
     * @test
     *
     */
    public function testGetCost()
    {
        $this->assertEquals(1000, $this->object->getCost());
    }
}
