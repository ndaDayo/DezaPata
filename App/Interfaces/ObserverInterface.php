<?php
namespace App\Interfaces;

use App\Subjects\BulletinBoard;

interface ObserverInterface
{
    public function execute(BulletinBoard $board);
}