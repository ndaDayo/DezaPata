<?php

namespace App;

use App\Turkey;

class WildTurkey implements Turkey
{
    /**
     * @return mixed|string
     */
    public function gobble()
    {
        return "ゴロゴロ";
    }

    /**
     * @return mixed|string
     */
    public function fly()
    {
        return "短い距離を飛んでいます";
    }
}