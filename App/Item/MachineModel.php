<?php

namespace App\Item;

use App\Item;

class MachineModel
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
            1 => new Item(1,'ミニタワー',1000),
            2 => new Item(2,'ミドルタワー',2000),
            3 => new Item(3,'フルタワー',3000)
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