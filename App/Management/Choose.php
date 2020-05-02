<?php

namespace App\Management;

class Choose
{
    /** @var array */
    private $chooses = [];

    /**
     * @param $item
     */
    public function add($item)
    {
        $this->chooses[] = $item;
    }

    /**
     * @return array
     */
    public function getChooses()
    {
        return $this->chooses;
    }
}