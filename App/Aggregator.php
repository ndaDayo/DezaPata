<?php

namespace App;

interface Aggregator
{
    /**
     * @return mixed
     */
    public function orderIterator();

    /**
     * @return mixed
     */
    public function reverseIterator();
}