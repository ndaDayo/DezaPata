<?php

use App\Subjects\BulletinBoard;

require 'vendor/autoload.php';

$Bull = new BulletinBoard();
$Bull->sayHello();
echo "こんにわ";