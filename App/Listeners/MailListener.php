<?php

namespace App\Listeners;

use App\Interfaces\ObserverInterface;
use App\Subjects\BulletinBoard;

class MailListener implements ObserverInterface
{
    public function execute(BulletinBoard $board)
    {
        // TODO: Implement execute() method.
        echo "メール送信したよ";
    }
}