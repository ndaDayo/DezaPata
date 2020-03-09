<?php

namespace App\Exchange;

use App\ExchangeInterface\ExchangeInterface;

class DollarExchange implements ExchangeInterface
{
    private $yen;

    private $rate = 1.1048;

    public function __construct($yen)
    {
        $this->yen = $yen;
    }

    public function currencyConversion()
    {
        return $this->yen * $this->rate;
    }
}
