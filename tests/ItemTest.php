<?php

use App\Item;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2020-05-02 at 13:09:34.
 */
class ItemTest extends PHPUnit_Framework_TestCase
{
    /** @var Item */
    protected $item;

    protected function setUp()
    {
        $this->item = new Item(1, 'テスト商品', 100);
    }

    /**
     * @test
     */
    public function testDisplay()
    {
        $except = '商品名:' . 'テスト商品' . '価格:' . 100 . PHP_EOL;
        $this->assertSame($except, $this->item->display());
    }
}
