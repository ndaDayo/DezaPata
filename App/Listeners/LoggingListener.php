<?php
namespace App\Listeners;

use App\Interfaces\ObserverInterface;
use App\Subjects\BulletinBoard;

class LoggingListener implements ObserverInterface
{
    /**
     * ログに書き込む
     *
     * @param BulletinBoard $board
     * @return mixed|void
     */
    function execute(BulletinBoard $board)
    {
     echo 'ログ書き込みOK';
    }
};
