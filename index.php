<?php
require 'vendor/autoload.php';

use App\Subject\SMS;
use App\Observer\GirlFriend;
use App\Observer\Mum;

$sms = new SMS();
// SNSから通知を受け取るようにする
$girlFriend = new GirlFriend($sms);
$mum = new Mum($sms);

$sms->IAmHome();
echo "<hr>";
$sms->IAmHome(time() + 3600); // 一時間後