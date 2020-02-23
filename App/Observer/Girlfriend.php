<?php
namespace App\Observer;

use App\Observer\Observer;

class GirlFriend extends Observer
{
    public function notify($time)
    {
        echo "今家帰ったよ！晩御飯何にする？ ($time)<br>";
    }
}
