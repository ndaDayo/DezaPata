<?php

namespace App;

class OrderIterator implements Originalterator
{
    /**
     * @var Aggregator
     */
    private $aggregate;

    /** @var int */
    private $index = 0;

    /**
     * OrderIterator constructor.
     *
     * @param $aggregate
     */
    public function __construct($aggregate)
    {
        $this->aggregate = $aggregate;
    }

    /**
     * @return bool
     */
    public function hasNext()
    {
        if ($this->index < $this->aggregate->getLength()) {
            return true;
        }

        return false;
    }

    /**
     * @return mixed
     */
    public function next()
    {
        $book = $this->aggregate->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}