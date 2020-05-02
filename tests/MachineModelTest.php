<?php

use App\Item\Item;
use App\Item\MachineModel;

class MachineModelTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var MachineModel
     */
    protected $machine_model;

    protected function setUp()
    {
        $this->machine_model = new MachineModel;
    }

    /**
     * @test
     */
    public function testGetItem()
    {
        $except_item_1 = new Item(1, 'ミニタワー', 1000);
        $except_item_2 = new Item(2,'ミドルタワー',2000);
        $except_item_3 = new Item(3,'フルタワー',3000);

        $this->assertEquals($except_item_1, $this->machine_model->getItem(1));
        $this->assertEquals($except_item_2, $this->machine_model->getItem(2));
        $this->assertEquals($except_item_3, $this->machine_model->getItem(3));
    }
}
