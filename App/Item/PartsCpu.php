<?php

namespace App\Item;

use App\Item;

class PartsCpu
{
    /**
     * @var 商品
     */
    private $items;

    /**
     * MachineModel constructor.
     */
    public function __construct()
    {
        $this->items = [
            1 => new Item(1,'Core i3 プロセッサー',1000),
            2 => new Item(2,'Core i5 プロセッサー',2000),
            3 => new Item(3,'Core i7 プロセッサー',3000)
        ];
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getItems($id)
    {
        return $this->items[$id];
    }
}