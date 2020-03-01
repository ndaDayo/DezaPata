<?php
namespace App\Listeners;

use App\Interfaces\ObserverInterface;
use App\Subjects\BulletinBoard;

class SlackListener implements ObserverInterface
{
    public function execute(BulletinBoard $board)
    {
        echo "スラック通知したよ";
    }
}