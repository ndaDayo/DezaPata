<?php

use App\Fee\TotalFee;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2020-05-02 at 13:59:48.
 */
class TotalFeeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var TotalFee
     */
    protected $total_fee;

    protected function setUp()
    {
        $this->total_fee = new TotalFee;
    }

    /**
     * @test
     */
    public function testAdd()
    {
        $price = 100;
        $this->total_fee->add($price);

        $except = 100;
        $this->assertEquals($except, $this->total_fee->getTotal());
    }
}