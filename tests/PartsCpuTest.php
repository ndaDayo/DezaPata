<?php

use App\Item\Item;
use App\Item\PartsCpu;

class PartsCpuTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PartsCpu
     */
    protected $parts_cpu;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->parts_cpu = new PartsCpu;
    }

    /**
     * @test
     */
    public function testGetItem()
    {
        $except_item_1 = new Item(1,'Core i3 プロセッサー',1000);
        $except_item_2 = new Item(2,'Core i5 プロセッサー',2000);
        $except_item_3 = new Item(3,'Core i7 プロセッサー',3000);

        $this->assertEquals($except_item_1, $this->parts_cpu->getItem(1));
        $this->assertEquals($except_item_2, $this->parts_cpu->getItem(2));
        $this->assertEquals($except_item_3, $this->parts_cpu->getItem(3));
    }
}
