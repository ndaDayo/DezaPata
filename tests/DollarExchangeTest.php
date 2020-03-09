<?php

namespace Tests;

use App\Exchange\DollarExchange;
use PHPUnit_Framework_TestCase;

class DollarExchangeTest extends PHPUnit_Framework_TestCase
{
    /** @var DollarExchange */
    protected $dollarExchange;

    /** @var int */
    private $yen;

    /** @var float */
    private $rate;

    protected function setUp()
    {
        $this->yen = 100;
        $this->rate = 1.1048;
        $this->dollarExchange = new DollarExchange($this->yen);
    }

    /**
     * @test
     *
     */
    public function testCurrencyConversion()
    {
        $expected_us = $this->rate * $this->yen;
        $this->assertEquals($expected_us, $this->dollarExchange->currencyConversion("US"));
    }
}
