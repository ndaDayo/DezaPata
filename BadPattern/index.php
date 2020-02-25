<?php
require '../vendor/autoload.php';


use BadPattern\Factory\CarFactory;

$carFactory = new CarFactory();
$redCar =  $carFactory->create('red');
$redCar->run();

$greenCar =  $carFactory->create('green');
$greenCar->run();