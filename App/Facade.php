<?php

namespace App;

use App\Fee\TotalFee;
use App\Item\MachineModel;
use App\Item\PartsCpu;
use App\Management\Choose;

/**
 * Class Facade
 *
 * @package App
 */
class Facade
{
    private $machine_model;
    private $parts_cpu;
    private $total_fee;
    private $choose;

    /**
     * Facade constructor.
     */
    public function __construct()
    {
        $this->machine_model = new MachineModel();
        $this->parts_cpu = new PartsCpu();
        $this->total_fee = new TotalFee();
        $this->choose = new Choose();
    }

    /**
     * @param $id
     */
    public function chooseModel($id)
    {
        $item = $this->machine_model->getItem($id);
        $this->choose->add($item);
        $this->total_fee->add($item->getPrice());
    }

    /**
     * @param $id
     */
    public function chooseCpu($id)
    {
        $item = $this->parts_cpu->getItem($id);
        $this->choose->add($item);
        $this->total_fee->add($item->getPrice());
    }

    /**
     * @return array
     */
    public function getTotalItem()
    {
        $items = [];

        foreach ($this->choose->getChooses() as $item) {
            $items[] = $item->display();
        }

        return $items;
    }

    /**
     * @return string
     */
    public function getTotalPrice()
    {
        return '合計:' . $this->total_fee->getTotal() . PHP_EOL;
    }
}
