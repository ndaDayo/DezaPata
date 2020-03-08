<?php

namespace App;

class MoneyExchange
{
    /** @var int */
    private $yen;

    /** @var int */
    private $doll_rate = 1.1048;

    public function __construct($yen)
    {
        $this->yen = $yen;
    }

    /**
     * @param $country
     * @return float|int
     */
    public function currencyConversion($country)
    {
        if ($country === 'US') {
            return $this->yen * $this->doll_rate;
        }
    }
}