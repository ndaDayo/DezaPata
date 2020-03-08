<?php

namespace App;

class MoneyExchange
{
    /** @var int */
    private $yen;

    /** @var int */
    private $doll_rate = 1.1048;

    /** @var int */
    private $eur_rate = 1.2978;

    /** @var int */
    private $pond_rate = 1.4681;

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
        } else if ($country === 'EUR') {
            return $this->yen * $this->eur_rate;
        } else if ($country === 'ENGLAND') {
            return $this->yen * $this->pond_rate;
        } else {
            return false;
        }
    }
}