<?php
namespace App\Interfaces;

use App\Subjects\BulletinBoard;

interface ObserverInterface
{
    /**
     * @param BulletinBoard $board
     * @return mixed
     */
    public function execute(BulletinBoard $board);
}