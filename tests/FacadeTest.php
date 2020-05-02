<?php

use App\Facade;
use App\Item\MachineModel;

class FacadeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Facade
     */
    protected $facade;

    /**
     * クラスを呼び出し用のID
     * @var int
     */
    private const ID_01 = 1;
    private const ID_02 = 2;
    private const ID_03 = 3;

    protected function setUp()
    {
        $this->facade = new Facade;
    }

    /**
     * @test
     *
     */
    public function getTotalItemTest()
    {
        $this->facade->chooseModel(self::ID_01);
        $this->facade->chooseCpu(self::ID_02);

        $except = [
            0 => "商品名:ミニタワー価格:1000" . PHP_EOL,
            1 => "商品名:Core i5 プロセッサー価格:2000". PHP_EOL
        ];

        $this->assertEquals($except,$this->facade->getTotalItem());
    }

    /**
     * @test
     *
     */
    public function getTotalPriceTest()
    {
        // id 2は2000円
        $this->facade->chooseModel(self::ID_02);
        // id 3は3000円
        $this->facade->chooseCpu(self::ID_03);

        $except = '合計:' . 5000 . PHP_EOL;

        $this->assertEquals($except,$this->facade->getTotalPrice());
    }
}

