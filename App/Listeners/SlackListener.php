<?php
namespace App\Listeners;

use App\Interfaces\ObserverInterface;
use App\Subjects\BulletinBoard;

class SlackListener implements ObserverInterface
{
    /**
     * スラックに通知する
     *
     * @param BulletinBoard $board
     * @return string
     */
    public function execute(BulletinBoard $board):string
    {
        return "スラック通知したよ";
    }
}