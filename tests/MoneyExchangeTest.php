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

    private $doll_rate;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->yen = 100;
        $this->moneyExchange = new MoneyExchange($this->yen);
        $this->doll_rate = 1.1048;
    }

    /**
     * @test
     */
    public function 円をドルに変換する()
    {
        $country = "US";
        $expected = $this->doll_rate * $this->yen;

        /** @var TYPE_NAME $country */
        $this->assertEquals($expected, $this->moneyExchange->currencyConversion($country));
    }

}
