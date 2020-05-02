<?php

namespace App\Item;

/**
 * Class PartsCpu
 *
 * @package App\Item
 */
class PartsCpu implements ItemInterface
{
    /**
     * @var Item
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
    public function getItem($id)
    {
        return $this->items[$id];
    }
}