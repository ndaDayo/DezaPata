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
     * @return mixed|void
     */
    public function execute(BulletinBoard $board)
    {
        echo "スラック通知したよ";
    }
}