<?php

namespace App;

class ReverseIterator implements Originalterator
{
    private $aggregate;

    private $index = 0;

    public function __construct($aggregate)
    {
        $this->aggregate = $aggregate;
        $this->index = $this->aggregate->getLength() - 1;
    }

    public function hasNext()
    {
        return ($this->index >= 0);
    }

    public function next()
    {
        $book = $this->aggregate->getBookAt($this->index);
        $this->index--;
        return $book;
    }
}