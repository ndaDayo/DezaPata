<?php
namespace App\Listeners;

use App\Interfaces\ObserverInterface;
use App\Subjects\BulletinBoard;

class LoggingListener implements ObserverInterface
{
    function execute(BulletinBoard $board)
    {
     echo 'ログ書き込みOK';
    }
};
