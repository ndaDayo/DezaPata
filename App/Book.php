<?php

namespace App;

class Book
{
    /** @var string */
    private $name = '';

    /**
     * Book constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 本の名前を返す
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

