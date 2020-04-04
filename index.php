<?php
require 'vendor/autoload.php';

use App\TurkeyAdapter;
use App\WildTurkey;

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

$turkeyAdapter->quack();
$turkeyAdapter->fly();
