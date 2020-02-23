<?php
namespace App\Observer;

use App\Observer\Observer;

class Mum extends Observer
{
    public function notify($time)
    {
        echo "遊びにくる？？($time)<br>";
    }
}
