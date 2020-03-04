<?php

namespace App\Listeners;

use App\Interfaces\ObserverInterface;
use App\Subjects\BulletinBoard;

class MailListener implements ObserverInterface
{
    /**
     * メール送信する
     *
     * @param BulletinBoard $board
     * @return mixed|void
     */
    public function execute(BulletinBoard $board)
    {
        echo "メール送信したよ";
    }
}