<?php
require 'vendor/autoload.php';

use App\Subjects\BulletinBoard;
use App\Listeners\LoggingListener;
use App\Listeners\MailListener;
use App\Listeners\SlackListener;

//　掲示板クラス
$user_1 = new BulletinBoard('はやと');

// リスナー登録
$user_1->addObserver(new LoggingListener());
$user_1->addObserver(new MailListener());
$user_1->addObserver(new SlackListener());


$user_1->comment('おはよう');



