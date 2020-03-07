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
     * @return string
     */
    function execute(BulletinBoard $board):string
    {
       return 'ログ書き込みOK';
    }
};
