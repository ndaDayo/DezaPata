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
        return "メール送信したよ";
    }
}
