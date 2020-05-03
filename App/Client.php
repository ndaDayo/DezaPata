<?php

namespace App;

class Client
{
    private $service;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->service = new Service();
    }

    /**
     * '何かする'を返す
     */
    public function doSomething()
    {
        $this->service->doSomething();
    }
}