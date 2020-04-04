<?php

namespace App;

class Beaker
{
    /** @var int */
    private $water = 0;

    /** @var int */
    private $salt = 0;

    /** 食塩がすべて溶けたときtrue、溶け残ったときfalse
     *
     * @var boolean
     */
    private $melted;

    /** 食塩を加えて、かき混ぜる場合
     *
     * @var int
     */
    const ADD_SALT = 1; //

    /** 水を加えて、かき混ぜる場合
     *
     * @var int
     */
    const ADD_WATER = 2;

    /**
     * 常温での飽和食塩水の濃度は約26.4%
     *
     * @var float
     */
    const SATURATED_CONCENTRATION = 26.4;

    /**
     * Beaker constructor.
     *
     * @param $water
     * @param $salt
     */
    public function __construct($water, $salt)
    {
        $this->water = $water;
        $this->salt = $salt;
        $this->mix();
    }

    /**
     * ビーカーに食塩を入れる
     *
     * @param int $salt
     */
    public function addSalt($salt)
    {
        $this->salt += $salt;
    }

    /**
     * ビーカーに水を入れる
     *
     * @param $water
     */
    public function addWater($water)
    {
        $this->water += $water;
    }

    /**
     * 溶けたか溶け残ったかをセットする
     *
     */
    public function mix()
    {
        if (($this->salt / ($this->salt + $this->water)) * 100 < $this::SATURATED_CONCENTRATION) {
            $this->melted = true;
        } else {
            $this->melted = false;
        }
    }

    /**
     * 食塩の量を返す
     *
     * @return int
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * 水の量を返す
     *
     * @return int
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * 溶けたか溶け残ったか調べる
     *
     * @return bool
     */
    public function isMelted()
    {
        return $this->melted;
    }

    /**
     * 実験結果をノートに記録する
     *
     * @return string
     */
    public function note()
    {
        return "水：" . $this->water . "g" . "\n" .
            "食塩：" . $this->salt . "g" . "\n" .
            "濃度：" . $this->salt / ($this->water + $this->salt) * 100 . "%" . "\n";
    }
}
