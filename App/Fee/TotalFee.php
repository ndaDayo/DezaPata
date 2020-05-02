<?php

namespace App\Fee;

class TotalFee
{
    /** @var int  */
    private $total = 0;

    /**
     * @param $price
     */
    public function add($price)
    {
        $this->total = $this->total + $price;
    }
    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
}
