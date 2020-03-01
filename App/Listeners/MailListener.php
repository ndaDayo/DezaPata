<?php

namespace App\Listeners;

use App\Interfaces\ObserverInterface;
use App\Subjects\BulletinBoard;

class MailListener implements ObserverInterface
{
    public function execute(BulletinBoard $board)
    {
        echo "メール送信したよ";
    }
}