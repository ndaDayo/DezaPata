<?php
namespace App\Listeners;

use App\Interfaces\ObserverInterface;
use App\Subjects\BulletinBoard;

class LoggingListener implements ObserverInterface
{
    // TODO: Implement execute() method.
    function execute(BulletinBoard $board)
    {
     echo 'ログ書き込みOK';
    }
};
