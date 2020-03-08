<?php

namespace Tests;

use App\MoneyExchange;
use PHPUnit_Framework_TestCase;

class MoneyExchangeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var MoneyExchange
     */
    protected $moneyExchange;

    private $yen;

    /** @var float */
    private $doll_rate;

    /** @var float */
    private $eur_rate;

    /** @var float */
    private $pond_rate;


    protected function setUp()
    {
        $this->yen = 100;
        $this->moneyExchange = new MoneyExchange($this->yen);

        $this->doll_rate = 1.1048;
        $this->eur_rate = 1.2978;
        $this->pond_rate = 1.4681;
    }

    /**
     * @test
     */
    public function testCurrencyConversion()
    {
        $expected_us = $this->doll_rate * $this->yen;
        $expected_eur = $this->eur_rate * $this->yen;
        $expected_pond = $this->pond_rate * $this->yen;

        $this->assertEquals($expected_us, $this->moneyExchange->currencyConversion("US"));
        $this->assertEquals($expected_eur, $this->moneyExchange->currencyConversion("EUR"));
        $this->assertEquals($expected_pond, $this->moneyExchange->currencyConversion("ENGLAND"));
    }

}
