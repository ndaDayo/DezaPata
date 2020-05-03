<?php

namespace App;

class Client
{
    private $service;

    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    public function doSomething()
    {
        $this->service->doSomething();
    }
}