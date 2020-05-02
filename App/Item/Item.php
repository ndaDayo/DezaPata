<?php

namespace App\Item;

/**
 * Class Item
 *
 * @package App\Item
 */
class Item
{
    /** @var int */
    private $id;
    /** @var string */
    private $name;
    /** @var int */
    private $price;

    /**
     * Item constructor.
     *
     * @param $id
     * @param $name
     * @param $price
     */
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function display()
    {
        return '商品名:' . $this->getName() . '価格:' . $this->getPrice() . PHP_EOL;
    }
}