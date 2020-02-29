<?php
require 'vendor/autoload.php';

use App\Components\TravelPlan;
use App\Decorators\Packs\AirplanePack;
use App\Decorators\Packs\HotelPack;

/** @var TYPE_NAME $plan_base */
$plan_base = new TravelPlan();
$plan_base->setPlan("沖縄旅行");
$plan_base->setDuration('9/12~10/12');

$pack_plan_1 = new AirplanePack($plan_base,'春秋航空',3000);
echo $pack_plan_1->getPlan();
echo number_format($pack_plan_1->getCost());

$pack_plan_2 = new HotelPack($plan_base,'ANAホテル',4000);
echo $pack_plan_2->getPlan();
echo $pack_plan_2->getCost();
