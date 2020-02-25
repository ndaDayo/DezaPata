<?php
require 'vendor/autoload.php';

use App\Factory\GreenFactory;
use App\Factory\RedFactory;

$redCar = new RedFactory();
$redCar->do();

$greenCar = new GreenFactory();
$greenCar->do();