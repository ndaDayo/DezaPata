<?php

namespace Tests;

use PHPUnit_Framework_TestCase;

class MoneyExchangeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var MoneyExchange
     */
    protected $moneyExchange;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->moneyExchange = new MoneyExchange;
    }

    /**
     * @test
     */
    public function 円をドルに変換する(){

    }

}
