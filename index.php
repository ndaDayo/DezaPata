<?php
require 'vendor/autoload.php';

use App\Components\TravelPlan;
use App\Decorators\Packs\AirplanePack;
use App\Decorators\Packs\HotelPack;

$plan_base = new TravelPlan();
$plan_base->setPlan("沖縄");
$plan_base->setDuration('9/12~10/12');

echo sprintf('%s %s',$plan_base->getDuration(),$plan_base->getPlan());

$pack_plan_1 = new AirplanePack($plan_base,'春秋航空',3000);
echo $pack_plan_1->getPlan();
echo number_format($pack_plan_1->getCost());


$pack_plan_2 = new HotelPack($plan_base,'ANAホテル',4000);
echo $pack_plan_2->getPlan();
echo number_format($pack_plan_2->getCost());
